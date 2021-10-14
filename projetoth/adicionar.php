
<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('images/login.jpg' );
background-color: rgb(5, 5, 51);
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #1279ff;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #1294ff;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #1294ff;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

.form{
    position: absolute;
  top: 30%;
  width: 60%;
  
  text-align: center;
  font-size: 18px;
  border: 2px solid red;
  border-radius: 8px;
  display: block;
  right: 440px;
  width: 40%;
  padding: 20px;

  
  
  

}
</style>


<form method="POST" action="adicionar_action.php" class="form  justify-content-center " style="color:#dcdcde;">
<h1>Adicionar Usuário</h1>
    <label>
        Nome: <br/>
        <input type="text" name="name" />
    </label><br/><br/>

    <label >
        Email: <br/>
        <input type="text" name="email" />
    </label><br/><br/>

    <input type="submit" value="Adicionar" />
</form>