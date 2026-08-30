const modalFocusCtl = () => {

  // フォーカスの位置を戻すための空の箱
  document.addEventListener('DOMContentLoaded', () => {

    const triggerStack = [];

    // モーダルが開く直前に[]にターゲットをプッシュする
    document.addEventListener('shown.bs.modal', (e) => {
      if(e.relatedTarget) {
        triggerStack.push(e.relatedTarget);
      }
    });


    // モーダルBが閉じられる瞬間(hide.bs.modal)に、
    document.addEventListener('hide.bs.modal', (e) => {
      // 今フォーカスが当たっている要素(activeElementがあるなら)から
      if(document.activeElement && e.target.contains(document.activeElement)) {
        // フォーカスをはずす(blurして浮かせる)
        document.activeElement.blur();
      }
    });

    // モーダルBが完全に閉じられたら(hidden.bs.modal)
    document.addEventListener('hidden.bs.modal', (e) => {
      // 今閉じられたモーダルを取得
      const closedModal = e.target;

      if(closedModal.dataset.skipBack === 'true'){
        // スタックの一番底(最初に親ページで押されたボタン)を取得
        const rootTrigger = triggerStack[0];
        triggerStack.length = 0;

        if(rootTrigger) {
          setTimeout(() => {
            rootTrigger.focus({ preventScroll: true });
          }, 0);
        }
        return;
      }

      const lastTrigger = triggerStack.pop();
      if(lastTrigger) {
        // requestAnimationFrameを挟むことで、確実に「完全に閉じられた瞬間」に実行される
        setTimeout(() => {
          lastTrigger.focus({ preventScroll: true });
        }, 0);
      }
    })

  })

}
modalFocusCtl();
