const form = document.getElementById('form');
const targetArea =document.getElementById('targetArea');
const myCollapse = new bootstrap.Collapse(document.getElementById('collapseWidthExample'), {
  toggle : false
});

form.addEventListener('submit', (e) => {
  // formの標準機能でページ遷移されるのを止める
  e.preventDefault();

  // formを使用した場合に中身を送信するための空の箱
  const formData = new FormData(form);
  
  // php呼び出し
  fetch('common/form/get-name.php',{
    method: 'POST',
    body: formData
  })

  // データが返ってこないならエラーを返し、問題がなければ開封して.thenに入れる
  .then(response => {
  if(!response.ok){
    throw new Error ('HTMLエラー：' `${response.status}`)
  }
  return response.json();
  })
  .then(data => {
    targetArea.innerHTML = `
      ${data.result}さん
    `;
  })
})