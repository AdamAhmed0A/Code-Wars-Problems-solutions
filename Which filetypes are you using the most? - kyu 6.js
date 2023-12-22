https://www.codewars.com/kata/5c7254fcaccda64d01907710/train/javascript
////////////////////////////////////////////////
function solve(files) {
    let counts = {};

    files.forEach(file => {
        let extension = file.split(".").pop();
        counts[extension] = (counts[extension] || 0) + 1;
    });

    let maxCount = Math.max(...Object.values(counts));

    let result = Object.keys(counts).filter(extension => counts[extension] === maxCount).sort();

    return result.map(extension => `.${extension}`);
}
