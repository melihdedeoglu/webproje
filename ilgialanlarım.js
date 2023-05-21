function ara()
{
                
    fetch("https://thronesapi.com/api/v2/Characters")

    .then(data => data.json())

    .then(veri =>{

    console.log(veri);

    var rastgelesayi = Math.floor(Math.random() * veri.length);

        document.getElementById("got").src=veri[rastgelesayi].imageUrl;
        document.getElementById("ad").innerHTML= "<b>İsim: </b> " + veri[rastgelesayi].fullName;
        document.getElementById("aile").innerHTML= "<b>Hanedanlık ismi: </b> " + veri[rastgelesayi].family;
        document.getElementById("lakap").innerHTML= "<b>Lakap: </b> " + veri[rastgelesayi].title;

    })
                
}        