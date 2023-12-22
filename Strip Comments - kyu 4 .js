https://www.codewars.com/kata/51c8e37cee245da6b40000bd/train/javascript
////////////////////////////////////////////////
function solution(input, markers) {
    let lines = input.split("\n");

    for (let i = 0; i < lines.length; i++) {
        for (let j = 0; j < markers.length; j++) {
            let index = lines[i].indexOf(markers[j]);
            if (index !== -1) {
                lines[i] = lines[i].substring(0, index).trimRight();
            }
        }
    }

    return lines.join("\n");
}
