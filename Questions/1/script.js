
let result = "";

for (let i = 1; i <= 100; i++) {
    let output = "";

    if (i % 3 === 0) {
        output += "Switch";
    }

    if (i % 5 === 0) {
        output += " Telecom";
    }

    if (output === "") {
        output = i;
    }

    result += output + ",";
}

result = result.slice(0, -1);
document.getElementById('text').innerHTML = result

