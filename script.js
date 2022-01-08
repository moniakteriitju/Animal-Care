const imgDiv= document.querySelector('.profile_pic');
 const img= document.querySelector('#photo');
 const file= document.querySelector('#file');
 const uploadbtn= document.querySelector('#uploadbtn');
 

 function fun1()
 {
    uploadbtn.style.display="block";
    // uploadbtn.style.color="red";

 }

function fun2()
 {
    uploadbtn.style.display="none";

 }



imgDiv.addEventListener("mouseenter",fun1,false);
imgDiv.addEventListener("mouseleave",fun2,false);



function fun3()
{
    const choosedFile=this.files[0];

    if(choosedFile)
    {
        const reader = new FileReader();

        function fun4()
        {
            img.setAttribute('src',reader.result);
        }

        reader.addEventListener('load',fun4,false);

        reader.readAsDataURL(choosedFile);

    }
}

file.addEventListener('change',fun3,false);