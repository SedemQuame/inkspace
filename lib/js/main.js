/*jshint esversion: 6 */
// console.log("InkSpace!!!");

rows(10);

function rows(numberOfRows) {
  let rowHTML = "";

  // generate HTML for board rows.
  for (var i = 0; i < numberOfRows; i++) {
    rowHTML += '<div id="row' + i + '" class="board-game"></div>';
  }
  // insert rows HTML in document
  const boardElement = document.getElementById("gameboard");
  boardElement.innerHTML = rowHTML;
  changeRowHeight(numberOfRows);
}

function changeRowHeight(numberOfRows) {
  var id = "";
  for (var i = 0; i < numberOfRows; i++) {
    id = "row" + i;
    var row = document.getElementById(id);
    row.style.height = 400 / numberOfRows + "px";
    // Adding cells to every row.
    squaresPerRow(id, i, numberOfRows);
  }
}

function squaresPerRow(rowId, colId, numberOfSquares) {
  let squaresHTML = "";

  console.log(rowId);
  // generate HTML for board squares
  for (let i = 0; i < numberOfSquares; i++) {
    let cellId = rowId + 1 + "_" + colId;
    squaresHTML += '<button id="' + colId + '" class="cell"></button>';
  }

  // insert squares HTML in DOM
  const boardElement = document.getElementById(rowId);
  boardElement.innerHTML = squaresHTML;
}
