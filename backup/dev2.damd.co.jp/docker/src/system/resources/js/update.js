// 一定期間New/Upマークを表示する
function newUp(y, m, d, c) {
  delDay = 14; // 何日後に削除するか
  oldDay = new Date(y + "/" + m + "/" +d);
  newDay = new Date();
  d =(newDay - oldDay) / (1000 * 24 * 3600);
  if(d <= delDay) {
    // Newマーク
    if(c == "new") document.write("<span class='mark new'>NEW!</span>");
    // Upマーク
    if(c == "up") document.write("<span class='mark update'>UPDATE</span>");
  }
}
//