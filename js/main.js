const contact=document.querySelector('#contact');
    const dashboard=document.querySelector('#dashboard');
    const profile=document.querySelector('#profile');
    const settings=document.querySelector('#settings');
    const round1=document.querySelectorAll('.round1');
    const round=document.querySelectorAll('.round');
    const classdashboard=document.querySelector('.dashboard');
    const classcontact=document.querySelector('.contact');
    const classprofile=document.querySelector('.profile');
    const classsettings=document.querySelector('.settings');
    const add=document.querySelector('.add');
    const hidden=document.querySelector('.hidden');
    const ham=document.querySelector('.burger');
    const nv=document.querySelector('.nv');
        const main=document.querySelector('.none');

    console.log(nv)
    classcontact.addEventListener('click',()=>{
        round.forEach((roun)=>{
            roun.classList.remove('round');
            roun.classList.add('round1');
        })
        round1[1].classList.remove('round');
        round1[1].classList.add('round1');

        round1[2].classList.remove('round');
        round1[2].classList.add('round1');

        dashboard.style.display='none';
        profile.style.display='none';
        settings.style.display='none';

        contact.style.display='block';
        round1[0].classList.add('round');
        round1[0].classList.remove('round1');
        
    })
    classprofile.addEventListener('click',()=>{
        round.forEach((roun)=>{
            roun.classList.remove('round');
            roun.classList.add('round1');
        })
        round1[0].classList.remove('round');
        round1[0].classList.add('round1');

        round1[2].classList.remove('round');
        round1[2].classList.add('round1');

        dashboard.style.display='none';
        contact.style.display='none';
        profile.style.display='block';
        settings.style.display='none';
        round1[1].classList.add('round');
        round1[1].classList.remove('round1');

    })
    classsettings.addEventListener('click',()=>{
        round.forEach((roun)=>{
            roun.classList.remove('round');
            roun.classList.add('round1');
        })
        round1[0].classList.remove('round');
        round1[0].classList.add('round1');
        round1[1].classList.remove('round');
        round1[1].classList.add('round1');

        dashboard.style.display='none';
        contact.style.display='none';
        profile.style.display='none';
        settings.style.display='block';
        round1[2].classList.add('round');
        round1[2].classList.remove('round1');

    })
    add.addEventListener('click',()=>{
        hidden.click();
    })

    ham.addEventListener('click',()=>{
        let nu=false;
       
            nv.style.display='flex';
            ham.style.display='none' ;
            nv.style.transition='3s ease-in all'
        
       
     
    
     
      
    })
    main.addEventListener('click',()=>{
        nv.style.display='none';
        ham.style.display='flex' ;

    })
    
    var events = [
    {'Date': new Date(2016, 6, 7), 'Title': 'Doctor appointment at 3:25pm.'},
    {'Date': new Date(2016, 6, 18), 'Title': 'New Garfield movie comes out!', 'Link': 'https://garfield.com'},
    {'Date': new Date(2016, 6, 27), 'Title': '25 year anniversary', 'Link': 'https://www.google.com.au/#q=anniversary+gifts'},
];

    var element = document.getElementById('caleandar');
caleandar(element, events, settings)

const viewrecords=document.querySelector('.viewrecords');
const month=document.querySelector('.mont');
const day=document.querySelector('.da');
const year=document.querySelector('.yea');
let bool=false;
viewrecords.addEventListener('click',()=>{
    if(bool==false){
        day.style.transform='translatex(-100%)'
        month.style.transform='translatey(-110%)'
        bool=!bool;

    }else{
        month.style.transform='translatex(-100%)';
        year.style.transform='translatey(-220%)';
        
    }
   
    
    
})