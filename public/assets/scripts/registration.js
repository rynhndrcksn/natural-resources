
document.getElementById("degreeOptions").onclick = programOptions;


//This function will show the program options dropdown
function programOptions() {
    let degreeOptions = document.getElementById("degreeOptions");
    //let selectedIndex = degreeOptions.selectedIndex;
    let selected = degreeOptions.options[degreeOptions.selectedIndex].value;
    let programOptionsDiv = document.getElementById("programOptions");
    if (selected === 'Natural Resources Forestry A.A.S.') {
        programOptionsDiv.classList.remove("d-none");
    } else {
        programOptionsDiv.classList.add("d-none");
    }
}

