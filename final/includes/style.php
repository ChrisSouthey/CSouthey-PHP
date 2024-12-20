<style>
    @charset "UTF-8";

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
    }
    body{
              font-family:limelight;  
    }

    /* -----------------------------NAV --------------------------*/
    nav{
        background-color:#B74343;
        width: 100%;
        height: 150px;
        display:flex;
        align-items:center;
    }
    nav h1{
        font-size:72px;
        margin-left:770px
    }
    nav a{
        font-size: 36px;
        color:#000000;
        text-decoration:none;
        margin-left:560px;
    }
    nav a:hover{
        color:#FFFFFF;
    }

    /* -------------------------MAIN SECTION -----------------------*/
    section{
        display:flex;
        width:100%;
    }
    section.main{
        background-color:#474747;
        width:100%;
        height:744px;
    }
    section h2{
        font-size: 36px;
        color:white;
        margin-top: 30px;
        margin-left:640px
    }

    /* -------Login--------- */
    .loginf{
        display:flex;
        color:white;
        font-size: 36px;
        margin-left:80px;
    }
    .loginf input{
        margin-left:10px;
        font-size:20px;
    }
    input[type="submit"]{
        background-color:#B74343;
        font-size:25px;
        border:none;
        color:white;
        padding:16px 32px;
        margin-left:80px;
        cursor:pointer;
    }
    input[type="submit"]:hover{
        background-color:brown;
    }
    
    /* ---------Manage info ------ */
    .man{
        display:flex;
        color:white;
        font-size: 36px;
        margin-left:80px;
        margin-bottom:10px;
    }
    .man input{
        margin-left:10px;
        font-size:20px;
    }
    .sub input{
        margin-bottom:10px;
    }
    .addlink{
        margin-left:30px;
        margin-bottom:10px;
    }
    .btnerr{
        display:flex;
        color:white;  
    }
    .error{
        color:white;
        font-size:30px;
        margin-left:80px;
    }
    /* ---------------------------SIDE BAR -----------------------*/
    .side{
        background-color:#2F2F2F;
        height:100%;
        width:250px;
    }
    .sea{
        display:flex;
        flex-direction:column;
        justify-content:center;
        color:white;
        font-size: 30px;
        margin-bottom:10px;
    }
    .sea input{
        margin:0 10px;
        font-size:40px; 
    }
    .sea input[type="submit"]{
        font-size:20px;
    }
    .sea h3{
        margin-left:50px;
    }
    .filt{
        display:flex;
        justify-content:center;
        color:white;
        font-size: 30px;
        margin-bottom:10px;
    }
    

    /* ---------------------------INFO------------------------ */
    .info{
        width: 100%;
    }
    .info table{
        width:100%;
        color:white;
        padding:20px;
        border: 2px solid black;
        border-collapse:collapse;
        text-align:center;
    }
    th{
        border:2px solid black;
        color:#B74343;
        text-decoration:underline;
    }
    td{
        height:20px;
        border-bottom:2px solid black;
    }
    th, td{
        padding:15px;
    }
    .info a{
        color:#B74343;
        text-decoration:none;
    }
    .info a:hover{
        color:brown;
    }

    /* ------------------------------------FOOTER ---------------------------------*/
    footer{
        background-color:#B74343;
        width:100%;
        height:50px;
        display:flex;
        align-items:center;
    }
    footer h3{
        font-size:24px;
        margin-left:20px;
    }
</style>
