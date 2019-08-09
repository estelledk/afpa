tableau = [5, 18, 14, 4, 26];

var temp = 0;
var i=0;

while (i < tableau.length) 
{
    if (tableau[i] > tableau[i+1]) 
    {
        temp = tableau[i];
        tableau[i] = tableau[i+1];
        tableau[i+1] = temp;
        console.log(tableau);
        i=0;
    } else 
    {
        i += 1;
    }
}

console.log(tableau);

