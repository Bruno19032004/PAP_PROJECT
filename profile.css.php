<style>
@import url("//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css");
@import url('https://fonts.googleapis.com/css2?family=Recursive:wght@400;500;600;700;800;900&display=swap');

*
{ 
    padding:0; 
    margin: 0; 
    box-sizing: border-box; 
}

body
{
    font-family: 'Recursive', sans-serif; 
    overflow: hidden; 
}

.container2
{ 
    max-height: 100vh; 
    width: 100%; 
    background-color: #131414;
    background-image: linear-gradient(135deg, #131414 0%, #000000 100%); 
    transform-style: preserve-3d; 
    overflow: hidden;
}

/*---------------------------------------------------Logo--------------------------------------------------------*/
.logo2{
    font-size: 1.8rem; 
    font-weight: 600; 
    text-transform: uppercase;
    letter-spacing: 2px; 
    line-height: 4rem; 
    margin-top: 20px;
}

.logo2 span{ 
    font-size: 1.8rem; 
    margin-left: 5px; 
    color: #008000; 
}
/*----------------------------------------------------------------------------------------------------------------*/
/*---------------------------------------------------Menu--------------------------------------------------------*/
.navbar2
{ 
    position: fixed; 
    top: 0; 
    left: 0; 
    width: 100%; 
    z-index: 10;
    height: 5rem;
}
.menu2{ 
    max-width: 72rem; 
    width: 100%; 
    height: 100%; 
    margin: 0 auto;
    padding: 0 2rem; 
    display: flex; 
    justify-content: space-between;
    align-items: center; 
    color: #fff;
}
.hamburger-menu{ 
    height: 4rem; 
    width: 3rem; 
    cursor: pointer;
    display: flex; 
    align-items: center; 
    justify-content: flex-end; 
}

.bar2
{ 
    width: 1.9rem; 
    height: 1.5px; 
    border-radius: 2px;
    background-color: #eee; 
    transition: 0.5s; 
    position: relative; 
}

.bar2::before, .bar2::after
{ 
    content: ""; 
    position: absolute;
    width: inherit; 
    height: inherit; 
    background-color: #eee;
    transition: 0.5s; 
}

.bar2::before{ 
    transform: translateY(-9px); 
}

.bar2::after{ 
    transform: translateY(9px); 
}

.container2.active .bar2{ 
    transform: rotate(360deg);
    background-color: transparent;
}

.container2.active .bar2::before{ 
    transform: translateY(0) rotate(45deg);
}

.container2.active .bar2::after{
    transform: translateY(0) rotate(-45deg);
}
.links{ 
    position: absolute; 
    width: 30%; 
    right: 0; 
    top: 0; 
    height: 100vh; 
    z-index: 2; 
    overflow: hidden;
    display: flex; 
    justify-content: flex-start; 
    align-items: center;
    margin-left: 10px;
}

ul{ 
    list-style: none; 
}

ul li.active a{ 
    color: #32CD32;
}

.links a{ 
    text-decoration: none; 
    color: #ddd; 
    padding: 0.7rem 0;
    display: inline-block; 
    font-size: 1.8rem; 
    font-weight: 300;
    text-transform: uppercase; 
    letter-spacing: 1px; 
    transition: 0.3s;
    opacity: 0; 
    transform: translateY(10px);
    animation: hide 0.5s forwards ease;
}

.links a:hover{ 
    color: #32CD32; 
}

.container2.active .links a{ 
    animation: appear 0.5s forwards ease var(--i);
}


/*----------------------------------------------------------------------------------------------------------------*/
/*---------------------------------------------------MAIN--------------------------------------------------------*/

.main-container2
{ 
    overflow: hidden; 
}

.main2
{ 
    position: relative; 
    width: 100%; 
    left: 0;
    z-index: 5;
    overflow: hidden; 
    transform-origin: left; 
    transform-style: preserve-3d; 
    transition: 0.5s;
}

header
{ 
    min-height: 100vh; 
    width: 100%;
    background: url("https://raw.githubusercontent.com/Bruno19032004/PAP_PROJECT/main/florest.gif") no-repeat top center / cover;
    position: relative;
}
.overlay2
{   
    position: absolute; 
    width: 100%; 
    height: 100%; 
    top: 0;
    left: 0; 
    background-color: rgba(0, 0, 0, 0.712);
    display: flex; 
    justify-content: center; 
    align-items: center;
    flex-direction: column; 
    color: #fff;
}

.inner{ 
    max-width: 35rem; 
    text-align: center; 
    color: #fff;
    padding: 0 2rem;
}

.title
{ 
    font-size: 3rem; 
}

.description
{ 
    margin: 10px 0; 
    text-align: center; 
    width: 50%;
    font-size: 1.5rem;
}

.btn
{ 
    margin-top: 1rem; 
    padding: 0.6rem 1.8rem;
    background-color: #e20f2f; 
    border: none; 
    border-radius: 25px;
    color: #fff; 
    text-transform: uppercase; 
    cursor: pointer;
    text-decoration: none;
}

.container2.active .main2{
    animation: main-animation 0.5s ease; cursor: pointer;
    transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                translateZ(310px) scale(0.5);
}

.container2.active .main2:hover + .shadow.one{
    transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                translateZ(230px) scale(0.5);
}
.container2.active .main2:hover{
    transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                translateZ(340px) scale(0.5);
}
/*----------------------------------------------------------------------------------------------------------------*/
/*---------------------------------------------------KEYFRAMES--------------------------------------------------------*/
@keyframes main-animation{
    from{ 
        transform: translate(0);
    }
    to{
        transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                    translateZ(310px) scale(0.5);
    }
}
@keyframes shadow-one{
    0%{
        transform: translate(0);
    }
    5%{
        transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                    translateZ(310px) scale(0.5);
    }
    100%{
        transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                    translateZ(215px) scale(0.5);
    }
}
@keyframes shadow-two{
    0%{
        transform: translate(0);
    }
    20%{
        transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                    translateZ(310px) scale(0.5);
    }
    100%{
        transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                    translateZ(120px) scale(0.5);
    }
}
@keyframes appear{
    from { 
        opacity: 0; 
        transform: translateY(10px); 
    }
    to{
         opacity: 1; 
         transform: translateY(0px);
     }
}
@keyframes hide{
    from { 
        opacity: 1; 
        transform:translateY(0px); }

    to{ 
        opacity: 0; 
        transform: translateY(10px); 
    }
}
/*----------------------------------------------------------------------------------------------------------------*/
/*---------------------------------------------------SHADOW--------------------------------------------------------*/
.shadow{ 
    position: absolute; 
    width: 100%; 
    height: 100vh; 
    top: 0;
    left: 0; 
    transform-style: preserve-3d; 
    transform-origin:left;
    transition: 0.5s; 
    background-color: #32CD32; 
}

.shadow.one{ 
    z-index: -1; 
    opacity: 0.3; 
}

.shadow.two{ 
    z-index: -2; 
    opacity: 0.1; 
}

.container2.active .shadow.one{
    animation: shadow-one 0.6s ease-out;
    transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                translateZ(215px) scale(0.5);
}

.container2.active .shadow.two{
    animation: shadow-two 0.6s ease-out;
    transform: perspective(1300px) rotateY(20deg) translateY(10px) 
                translateZ(120px) scale(0.5);
}
/*----------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------Profile-----------------------------------------------*/
.emp-profile{
        padding: 7%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 2rem;
        /*background: url("ff.jpg");*/
        background-color: #000;
        background-repeat: no-repeat;
        background-position: 0%;
        background-size: cover;
        border: 8px solid #008000;
    }
.profile-img{
    margin-left: -44px;
    margin-top: -50px;
}
    .profile-img img{
        width: 70%;
        height: 100%;
        border-radius: 25%;
        position:relative;
    }

.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #000;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #fff;
}
.profile-head h6{
    color: #008000;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 1000;
    color: #6c757d;
    cursor: pointer;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:800;
    border: none;
    font-size: 20px;
    color: #008000;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #008000;
    color: #008000;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    font-weight: 800;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #008000;
    font-weight: 800;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab{
    margin-bottom: -45px;
}
.profile-tab label{
    font-weight: 1000;
    color: #008000;
    font-size: 16spx;
}
.profile-tab p{
    font-weight: 1000;
    color: #fff;
    font-size: 16px;
}
/*----------------------------------------------------------------------------------------------------------------*/

</style>