// https://www.codewars.com/kata/58c5577d61aefcf3ff000081
//////////////////////////////
// Encoding its like that: 
// input: WEAREDISCOVEREDFLEEATONCE
// W       E       C       R       L       T       E
//   E   R   D   S   O   E   E   F   E   A   O   C           out put: WECRLTEERDSOEEFEAOCAIVDEN
//     A       I       V       D       E       N

function encodeRailFenceCipher(str, numberRails) {
  // simple check for the rows it its less than 0 or equal 1
    if (!str || numberRails < 1) {
        return '';
    }

  // splitting the coming input into array
    str = str.split('');
  
  // calculates how many moves that encoding will move to the next letter on the same row, if its 3 rows then it will move 4 times and if you increase or decrease it will be dynimcally work with you
    const moves = numberRails * 2 - 2;
  
  // to intialize the result at the end 
    let result = '';

    for (let i = 0; i < numberRails; i++) {
        let index = i;
      
        // creating the first row or last row
        if (i === 0 || i === numberRails - 1) {
            while (index < str.length) {
                result += str[index];
                index += moves;
            }
        }
        // creating middle rows
        else {
            let left = i;
            let right = moves - i;

            while (left < str.length) {
                result += str[left];

                if (right < str.length) {
                    result += str[right];
                }

                left += moves;
                right += moves;
            }
        }
    }

    return result;
}


// the idea of decoding is u can think of its an arrays and you can rearrange them on its right order

function decodeRailFenceCipher(cipher, key) {
    if(key <= 1) return ''
    // making an empty array containning \n values
    let rail = new Array(key).fill().map(() => new Array (cipher.length).fill("\n"))
    
    // row, col variables = 0
    let row = 0, col = 0
    
    // creating a postion  
    let dir_down
    
    // make a for loop to  intialize the postions, looping on rails
    for(let i = 0; i < cipher.length; i++){
        if(row === 0) dir_down = true //  changing the direction to downward if its at the top 
        if(row === key - 1) dir_down = false // change the direction to top if its at the bottom
        rail[row][col++] = "." // make the values with . and then we will intialize its real values later
        dir_down ? row++ : row-- // moving to the postioinning based on the row
    }
    
    // make an index varaible to intialize the cipher input index and adding the letter the the right postion
    let index = 0
    for(let i = 0; i < key; i++)
        for(let j = 0 ; j < cipher.length; j++)
            if(rail[i][j] === "." && index < cipher.length) rail[i][j] = cipher[index++]
    
    // looping to intialize the finval result into result string
    let result = ''
    row = 0, col = 0
    for(let i = 0; i < cipher.length; i++){
        if(row === 0) dir_down = true // same condtion 
        if(row === key - 1) dir_down = false // same condtion  
        if(rail[row][col] !== '\n') result += rail[row][col++] // intialize the values if its not equal to "." on its right order and place 
        dir_down ? row++ : row-- // moving based on row postion
    }
    return result
}
