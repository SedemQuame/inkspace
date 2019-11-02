/*jshint esversion: 6 */

// Declaring colors to be used.
let cellColors = {
    1: "#F20732",
    2: "#F20505",
    3: "#056CF2",
    4: "#0439D9",
    5: "#F2F2F2",
    6: "#0D0D0D",
    7: "#F23827",
    8: "#F205CB",
    9: "#6204BF",
    10: "#E5D700",
    11: "#735702",
    12: "#FF5400",
    13: "#39363D",
    14: "#ED0733",
    15: "#02A694",
    16: "#F0747F",
    17: "#22556E",
    18: "#FCBE4A",
    19: "#593C32",
    20: "#401C0F",
    21: "#3C56A6",
    22: "#F24976",
    23: "#17A67D",
    24: "#BF3F34",
    25: "#BF1304",
    26: "#F2B705",
    27: "#F20F0F",
    28: "#F21905",
    29: "#A6A6A6",
    30: "#F2B807"
};

// Declaring arrays for storing game data.
let visitedNodes = ["row0_0"];

let gameNodes = [];

let adjacentNodes = [];

// Let maximium n = 5 and minimum n = 20
// everytime user clicks on the procecced 
// button, level will be incremented by 1.
let gameLevel = 5;


rows(gameLevel, cellColors);

function rows(numberOfRows, cellColors) {
    let rowHTML = "";

    // generate HTML for board rows.
    for (var i = 0; i < numberOfRows; i++) {
        rowHTML += '<div id="row' + i + '" class="board-game"></div>';
    }

    // insert rows HTML in document
    const boardElement = document.getElementById("gameboard");
    boardElement.innerHTML = rowHTML;
    changeRowHeight(numberOfRows, cellColors);
}

function changeRowHeight(numberOfRows, cellColors) {
    var id = "";
    console.log("number of rows: " + numberOfRows);

    for (var i = 0; i < numberOfRows; i++) {
        id = "row" + i;
        var row = document.getElementById(id);
        row.style.height = 400 / numberOfRows + "px";
        // Adding cells to every row.
        squaresPerRow(id, i, numberOfRows, cellColors);
    }
}

function squaresPerRow(rowId, colId, numberOfSquares, cellColors) {
    let squaresHTML = "";

    // generate HTML for board squares
    for (let i = 0; i < numberOfSquares; i++) {
        let cellId = rowId + "_" + i;
        squaresHTML += '<button id="' + cellId + '" class="btn cell"></button>';
        let cell = document.getElementById(cellId);
    }

    // insert squares HTML in DOM
    const boardElement = document.getElementById(rowId);
    boardElement.innerHTML = squaresHTML;

    // generate HTML for board squares
    for (let i = 0; i < numberOfSquares; i++) {
        let cellId = rowId + "_" + i;
        let cell = document.getElementById(cellId);

        // Generating a random number between 0 and 31
        cell.style.backgroundColor = cellColors[getRandomInt(29)];

        // Adding eventListener to btn.
        cell.addEventListener("click", event => {

            // Appending btn into the array of visited nodes.
            let currentNodesColor = event.target.style.backgroundColor;
            let currentNodeId = event.target.id;

            if (!checkIfAllCellsHaveSimilarColor(visitedNodes)) {
                // Change color of all nodes, on the gameboard to that of the currentNode.
                if (changeColorToThatOfCurrentNode(currentNodeId, visitedNodes)) {
                    visitedNodes.push(currentNodeId);
                }

                registeringAdjacentNodes(visitedNodes);

                adjacentNodes = Array.from(new Set(adjacentNodes));

                // console.log("adjacent nodes: " + adjacentNodes);

                // Check Adjacent nodes and see if they have the same color.
                pushSimilarNodesToVisitedNodes(adjacentNodes, visitedNodes);
                console.log("Ajacent: " + adjacentNodes);
                console.log("Visited: " + visitedNodes);

                for (node of visitedNodes) {
                    document.getElementById(
                        node
                    ).style.backgroundColor = document.getElementById(
                        currentNodeId
                    ).style.backgroundColor;
                }
            } else {

                // and redirect user to the leaderboard.
            }
            // Checking if all level cleared.
            checkIfGameComplete();
        });
    }
}

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max) + 1);
}

function changeColorToThatOfCurrentNode(currentNodeId, visitedNodes) {
    if (visitedNodes.includes(currentNodeId)) {
        return false;
    } else {
        visitedNodes.push(currentNodeId);
        for (var node in visitedNodes) {
            document.getElementById(
                visitedNodes[node]
            ).style.backgroundColor = document.getElementById(
                currentNodeId
            ).style.backgroundColor;
        }
    }
}

function registeringAdjacentNodes(visitedNodes) {
    for (var i = 0; i < visitedNodes.length; i++) {
        let nodeId = visitedNodes[i];
        let identifier = nodeId.substring(3, nodeId.length);
        let rowCol = identifier.split("_");

        // String manipulations to get adjacent nodes.
        let row = rowCol[0];
        let col = rowCol[1];

        let newRow1 = parseInt(row, 10) + 1;
        let newRow2 = 0;
        if (parseInt(row, 10) >= 1) {
            newRow2 = parseInt(row, 10) - 1;
        }
        // console.log("Row: " + newRow1);

        let newCol1 = parseInt(col, 10) + 1;

        let newCol2 = 0;
        if (parseInt(col, 10) >= 1) {
            newCol2 = parseInt(col, 10) - 1;
        }
        // console.log("Col: " + newCol1);

        let newRolCol1 = "row" + newRow1 + "_" + newCol1;
        let newRolCol2 = "row" + newRow2 + "_" + newCol2;
        let newRolCol3 = "row" + newRow1 + "_" + col;
        let newRolCol4 = "row" + row + "_" + newCol1;
        let newRolCol5 = "row" + row + "_" + newCol2;
        let newRolCol6 = "row" + newRow2 + "_" + col;

        adjacentNodes.push(
            newRolCol1,
            newRolCol2,
            newRolCol3,
            newRolCol4,
            newRolCol5,
            newRolCol6
        );
    }
}

function pushSimilarNodesToVisitedNodes(adjacentNodes, visitedNodes) {
    console.log(" ");
    for (var i = 0; i < adjacentNodes.length; i++) {
        let currentNode = adjacentNodes[i];
        if (visitedNodes.includes(adjacentNodes)) {
            document.getElementById(currentNode).style.backgroundColor ==
                document.getElementById(visitedNodes[i]).style.backgroundColor;
            visitedNodes.push(currentNode);
        }
    }
}

function checkIfAllCellsHaveSimilarColor(visitedNodes) {
    let initialNodeColor = document.getElementById(visitedNodes[0]).style.backgroundColor;
    console.log(initialNodeColor);

    for (let i = 0; i < visitedNodes.length; i++) {
        if (initialNodeColor != document.getElementById(visitedNodes[i]).style.backgroundColor) {
            return false;
        }
    }
    return false;
}

function programFinish() {
    // console.log("Programmed finished");
    document.getElementById("inkSpace").style.display = "none";
    document.getElementById("confetti").style.display = "block";

    // Generating confetti
    startConfetti();
    printCongratulatoryMsg();
}

function checkIfGameComplete() {
    // Current color of the first block.
    let referenceNode = document.getElementById(visitedNodes[0]);
    let referenceNodeColor = referenceNode.style.backgroundColor;
    let condition = true;

    // Iterating through, board state and checking element's colors.
    let numberOfBoardElements = gameLevel;
    for (let i = 0; i < numberOfBoardElements; i++) {
        for (let j = 0; j < numberOfBoardElements; j++) {
            let element = "row" + i + "_" + j;
            if (referenceNodeColor != document.getElementById(element).style.backgroundColor) {
                // make condition variable false, to tell program that
                // not all elements have the same color
                condition = false;
                break;
            }
        }
        if (!condition) {
            break;
        }
    }

    if (condition) {
        programFinish();
    } else {
        // display message that, program is not finished.
    }
}

function printCongratulatoryMsg() {
    document.getElementById("finishingTime").innerText = sessionStorage.getItem("time");
}

function nextLevel() {
    visitedNodes = ["row0_0"];

    gameNodes = [];

    adjacentNodes = [];
    // clearGameDataFromPreviousLevel();

    // increasing level of diffculty.
    gameLevel += 1;

    document.getElementById("inkSpace").style.display = "block";
    stopConfetti();
    document.getElementById("confetti").style.display = "none";

    rows(gameLevel, cellColors);

    condition = false;
}