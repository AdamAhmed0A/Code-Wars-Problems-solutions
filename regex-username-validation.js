// this is a simle solution for regex username validation - Code Wars Problem kyu 8
function validateUsr(username) {
  res =  /^[a-z\d_]{4,16}$/.test(username) 
  return res
}