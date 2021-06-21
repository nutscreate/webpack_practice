const windowWidth = $(window).width();
const windowSm = 768;

if (windowWidth <= windowSm) {
const header = document.getElementById("js-footer-nav");
const footer = document.getElementById("js-p-hamburger-menu");

// ヘッダーの高さを取得
const hH = header.clientHeight;
// ウィンドウの高さを取得
const winH = window.innerHeight;
// ページの高さを取得
const docH = document.documentElement.scrollHeight;
// ウィンドウが最下部達した場合のウィンドウ上部の位置を取得
const windBtm = docH - winH;

// 現在地を示す変数を定義
let pos = 0;
// スクロール直前の位置を示す変数を定義
let lastPos = 0;

const onScroll = () => {
  if (pos > hH && pos > lastPos) {
    header.classList.add("l-footer-nav__active");
    footer.classList.add("p-hamburger-menu__active");
  }
  // スクロール位置がヘッダーの高さ分より小さいか
  // またはスクロール位置が最後のスクロール位置より小さい場合はclass名を削除
  if (pos < hH || pos < lastPos || windBtm <= pos) {
    header.classList.remove("l-footer-nav__active");
    footer.classList.remove("p-hamburger-menu__active");
  }

  // 最後のスクロール位置を保存
  lastPos = pos;
};

window.addEventListener("scroll", () => {
  // スクロールするごとにpos（現在地）の値を更新
  pos = window.scrollY;
  onScroll();
});

} else {

const headerElement = document.getElementById('js-header-nav');

document.addEventListener('scroll', function() {

  if (document.getElementById('js-header-nav__on').getBoundingClientRect().bottom < 0) {
    headerElement.classList.add('l-header-nav__active');
  } else {
    headerElement.classList.remove('l-header-nav__active');
  }
});


}
