// const murid = {
//     nama: "Thomas",
//     nisn: "8129",
//     email: "thomas@gmail.com",
// };
// console.log(JSON.stringify(murid));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let murid = JSON.parse(this.responseText);
//         console.log(murid);
//     }
// };
// xhr.open("GET", "coba.json", true);
// xhr.send();

$.getJSON("coba.json", function (data) {
    console.log(data);
});
