
let BtnClick;
let upLatters=["Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"];
let lowLatters=['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v', 'b','n','m'];
let simboles =["!","@","#","$","%","^","%","&","*"];
let genPwL =[];
let genPwS =[];
let randNum=[];
let gPw=[];
let fPw;
let fPw1;


function funGenPwNums()
{
    for(i=0;i<=5;i++)
    {
        randNum = Math.floor(Math.random()*upLatters.length);
        genPwL.push(randNum);
    }
    for(i=0;i<=1;i++)
    {
        randNum =Math.floor(Math.random()*simboles.length);
        genPwS.push(randNum);
    }
    console.log("latter ids",genPwL);
    console.log("simbole ids",genPwS);

}
function pwGen()
{
    for(i=0;i<=genPwL.length-1;i++)
    
    if(i<=2)
    {
        gPw.push(upLatters[genPwL[i]]);

    }
    else
    {
        gPw.push(lowLatters[genPwL[i]]);

    }
    for(i=0;i<=genPwS.length-1;i++)
    {
        gPw.push(simboles[genPwS[i]]);
    }
    fPw =gPw.sort(()=>0.5-Math.random());
    fPw1 =fPw.join('');
}
console.log(funGenPwNums());
console.log(pwGen());
