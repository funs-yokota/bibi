document.addEventListener("DOMContentLoaded", () => {
  const badge = document.querySelector(".fixed__badge");
  const mvTop = document.querySelector(".l-mv-top");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // まだ .l-mv-top が画面内にあるとき → 非表示
        badge.classList.remove("show");
      } else {
        // 完全に画面外に出たら → 表示
        badge.classList.add("show");
      }
    });
  });

  observer.observe(mvTop);
});