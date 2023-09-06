/* code goes here */
function init(){
    document.getElementById("sampleForm").addEventListener("submit",checkForEmptyFields);
}
window.addEventListener("load",init);
function checkForEmptyFields(e){
    var cssSelector = "input[type = text], input[type=password]";
    var fields = document.querySelectorAll(cssSelector);
    var fields = [];
    for(i = 0; i < fields.length; i++){
        if(fields[i].value == null || fields[i].value == ""){
            e.prevwntDefault();
            fieldList.push(fileds[i]);
        }
    }
    var msg = "The following fields can't be empty: ";
    if (fieldList.length > 0){
        for (i = 0; i < fieldlist.length; i++){
            msg += fieldList[i].id + ","
        }
        errorArea.innerHTML = "<p>" + msg + "</p>";
        errorArea.innerName = "visible";
        // alert(msg);
    }
}
function checkForEmptyFields(e){
    var errorArea = document.getElementById("errors");
    errorArea.ClassName = "hidden";
}
