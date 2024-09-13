<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    [data-theme="dark"]{
        --modo:url("resources/imagenes/dark.jpg") no-repeat;
        --usuario_default:url("resources/iconos/user_dark.png");
        --modo_btn:url("resources/iconos/dark.jpg");
        --modo_btn_img:url("resources/iconos/moon.png");
        --img_version:url("resources/iconos/log_version1-1_black.png");
        --img_logo_blk:url("resources/iconos/marca_propia_black.png");
        --img_logo_blk_sm:url("resources/iconos/logo_blk.png");
        --color_modo:#fff5ee;
        --sombra_principal:8px 15px 20px #fff5ee;
        --sombra_secundaria: 2px 3px 6px #fff5ee;
        --borde_principal:6px solid #fff5ee;
        --borde_secundario: 1px solid #fff5ee;
        --color_text:black;
    }

    [data-theme="light"]{
        --modo:url("resources/imagenes/light.jpg") no-repeat;
        --usuario_default:url("resources/iconos/user_light.png");
        --modo_btn:url("resources/iconos/light.jpg");
        --modo_btn_img:url("resources/iconos/light.png");
        --img_version:url("resources/iconos/log_version1-1_white.png");
        --img_logo_blk:url("resources/iconos/marca_propia_white.png");
        --img_logo_blk_sm:url("resources/iconos/logo_wht.png");
        --color_modo:white;
        --sombra_principal:8px 15px 40px black;
        --sombra_secundaria: 2px 3px 6px black;
        --borde_principal:4px solid black;
        --borde_secundario: 1px solid black;
        --color_text:black;
    }
    body{display:flex; align-items:center; justify-content: center; height: 100vh; overflow: hidden; margin:0%; flex-direction: column; position: relative; background: var(--modo); background-size: 100% 100%;}

    .backend{background: var(--img_logo_blk_sm); background-size: 100% 100%; position: absolute;}

    header{width: 100%; height: 5%; background-color: gray; opacity: 40%; border-bottom: var(--borde_secundario);  z-index:3}

    .menu{width: 100%; height: 100%; background-color: red; position: absolute; z-index: 3; display: none} 

    .btn{width: 10%; height: 100%; background-color: red}

    main{width: 100%; height: 90%; display: flex; align-items: center; justify-content: center;}

    form{box-sizing: border-box; border-right: var(--borde_principal); border-left: var(--borde_principal); border-radius: 40px; position: relative; overflow: hidden; box-shadow: var(--sombra_principal)}

    .shadow{width: 100%; height: 100%; position: absolute; z-index: 1; background-color: gray; opacity: 70%;}

    .form_img{width: 100%; height: 30%; z-index:2; position: absolute; box-sizing: border-box; border-bottom: var(--borde_secundario); display: flex; align-items: center; justify-content: center;}

    .img_user{width: 60%; height: 90%; background: var(--img_logo_blk); box-sizing: border-box; border: none;  background-size: 100% 100%;}

    .barra{width: 1%; height: 80%; background-color: var(--color_modo) ; margin-left: 4%;}

    .version_sistema{width: 20%; height: 40%; background: var(--img_version); background-size: 100% 100%; margin-left: 4%;}

    .form_content{width:100%; height: 45%; top: 30%; position: absolute; z-index: 1; box-sizing: border-box; border-bottom: var(--borde_secundario); display: flex; align-items: center; justify-content: center; flex-direction: column;}

    .titulo{width: 100%; height: 15%; background-color: var(--color_modo); border-bottom:var(--borde_secundario); box-sizing: border-box;}

    .titulo p{margin:0%; text-align: center; font-weight: bold; color: var(--color_text);}

    .formulario{width: 90%; height: 60%; display: flex; align-items: center; justify-content: center; flex-direction: column;}

    .formulario .title{width: 100%; height: 16%; margin-top: 1%; display: flex; align-items: center; justify-content: start}

    .formulario .title p{font-size: 16px; font-weight: bold; color: var(--color_text);}

    .formulario .user_password{width: 100%; height: 22%; margin-top:1%; display: flex; align-items: center; justify-content: center; overflow: hidden;}

    .formulario .user_password input{ width: 100%; height: 80%; background: none; border: none; border-bottom: var(--borde_secundario)}

    .access{width: 100%; height: 25%; display: flex; align-items: center; justify-content: center; display: flex; align-items: center; justify-content: start; flex-direction: column;}

    .access .btn_chk{width: 90%; height: 80%; margin-top: 1%; display: flex; align-items: center; justify-content: center}

    .access .btn_chk a{width: 50%; height: 60%;}

    .access .btn_chk button{margin-left: 5%; width: 45%; height: 70%; font-weight: bold; box-sizing: border-box; border: 3px outset black; background-color: var(--color_modo); border-radius: 2%; border-radius: 20px; color: var(--color_text);}

    .form_register{width: 100%; height:25%; position: absolute; top: 75%; display: flex; align-items: center; justify-content: center; z-index: 3; flex-direction: column}

    .form_register .register{ width: 90%; height: 20%; margin-bottom: 2%; margin-top: 1%; display: flex; align-items: center; justify-content: center;}

    .form_register .register p{font-size: 16px; font-weight: bold; color: var(--color_text);}

    .form_register .register input{ font-size: 14px; font-weight: bold; box-sizing: border-box; border: 3px outset black; background-color: var(--color_modo); border-radius: 2%; border-radius: 20px; color: var(--color_text);}


    footer{width: 100%; height: 5%;background-color: gray; opacity: 40%; border-top: var(--borde_secundario);  z-index:3}

    /*query moviles requerido primero*/
    @media (max-width: 600px) and (min-width: 150px){
        form{width: 70%; height: 80%;}
        .titulo p{font-size: 18px;}
        .backend{width: 30%; height: 20%; top:75%; left:70%;}
        .welcome{display:none}
    }

    /*query tablet*/
    @media(max-width:1024px) and (min-width:600px){
        form{width: 50%; height: 80%;}
        .titulo p{font-size: 20px;}
        .backend{width: 20%; height: 15%; top:80%; left:80%;}
        .welcome{display:none}
    }

    /*query pc monitores PEQUEÑOS Y MEDIANOS*/
    @media (max-width: 1366px) and (min-width: 1024px){
        form{width: 30%; height: 80%;}
        .titulo p{font-size: 20px;}
        .backend{width: 20%; height: 15%; top:80%; left:80%;}
        .welcome{width: 30%; height: 60%; margin-right: 10%; box-sizing: border-box; border-right: var(--borde_principal); border-top-right-radius: 30px; border-bottom-right-radius: 30px; background-color: red; display: flex; align-items: start; justify-content: center; flex-direction: column}
        .welcome h1{font-size: 50px; margin-bottom: 0%; margin-top: 0%; var(--color_text)}
    }

    /*query pc monitores GRANDES*/
    @media (max-width: 1500px) and (min-width:1366px){
        form{width: 30%; height: 80%;}
        .titulo p{font-size: 20px;}
        .backend{width: 15%; height: 15%; top:80%; left:85%;}
        .welcome{width: 30%; height: 60%; margin-right: 10%; box-sizing: border-box; border-right: var(--borde_principal); border-top-right-radius: 30px; border-bottom-right-radius: 30px; background-color: red; display: flex; align-items: start; justify-content: center; flex-direction: column}
        .welcome h1{font-size: 50px; margin-bottom: 0%; margin-top: 0%; var(--color_text)}
    }

    /*query pc monitores QUAD Y FULL HD */
    @media(max-width: 7680px) and (min-width:1500px){
        
    }

</style>
<body>
    <div class="backend"></div>
    <div class="menu" id="menu"></div>
    <header>
        <div class="btn" onclick="light()"></div>
    </header>
    <main>

        <div class="welcome">
            <h1>Welcome</h1>
            <h1>Back</h1>
        </div>

        <form action="#" method="POST">
            <div class="shadow"></div>
            
<!--Contenido de la marca y version-->
            <div class="form_img">
                <div class="img_user"></div>
                <div class="barra"></div>
                <div class="version_sistema"></div>
            </div>

<!--Contenido del formulario-->
            <div class="form_content">
                <div class="titulo">
                    <p>LOGIN</p>
                </div>
                <div class="formulario">
                    <div class="title"><p>Email address or username</p></div>
                    <div class="user_password"><input type="text"></div>
                    <div class="title"><p>Password</p></div>
                    <div class="user_password"><input type="text"></div>
                </div>
                <div class="access">
                    <div class="btn_chk">
                        <a href="#">Forgot your password?</a>
                        <button>LOGIN</button>
                    </div>
                </div>
            </div>

<!--Contenido de registro por redes sociales-->
            <div class="form_register">
                <div class="register"><p>Don't have an account?</p></div>
                <div class="register"><input type="button" value="SIGN UP FOR ERP SOLUTION"></div>
            </div>
        </form>
    </main>
    <footer></footer>
    <script src="resources/script.js"></script>
</body>

</html>