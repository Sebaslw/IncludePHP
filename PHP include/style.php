*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
header{
    width: 100%;
    height: 80px;
    background-color: rgb(107, 54, 191);
    color: #fff;
}
nav{
    display: flex;
    justify-content: space-around;
    line-height: 70px;
    font-size: 20px;
    font-weight: 500;
}
nav ul{
    display: flex;
    list-style: none;
    gap: 50px;
}
section img{
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 600px;
    width: 100%;
}
form {
    width: 600px;
    margin: 2px auto;
    padding: 40px;
    background-color: #f5f5f5;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
  
  .form-group {
    margin-bottom: 10px;
  }
  
  label {
    font-weight: bold;
  }
  
  textarea {
    height: 200px;
  }
  
  button {
    background-color: #000;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s;
  }
  
  button:hover {
    background-color: #ccc;
  }
  
  .btn-primary {
    background-color: #007bff;
  }
  
  .btn-primary:hover {
    background-color: #0069d9;
  }
  
  .alert {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    display: none;
  }
  
  .alert-success {
    color: #fff;
    background-color: #007bff;
  }
  
  .alert-danger {
    color: #fff;
    background-color: #dc3545;
  }
  
  @media (max-width: 576px) {
    form {
      width: 100%;
    }
  }
  
  .form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
  }
  
  