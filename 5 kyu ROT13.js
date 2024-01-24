https://www.codewars.com/kata/52223df9e8f98c7aa7000062/train/javascript
///////////////////////////////////////////////////////////
function rot13(str) {
    const a = "abcdefghijklmnopqrstuvwxyz"
    const A = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    const lista = a.split("")
    const listA = A.split("")
    const result = []
    str.split("").forEach( i =>{
        if(a.includes(i)){
            const index = (a.indexOf(i) +13) % 26
            result.push(a[index])
        }
        else if(A.includes(i)){
            const index = (A.indexOf(i) + 13 ) % 26
            result.push(A[index])
        }
        else{
            result.push(i)
        }
    })
    return result.join("")
}
