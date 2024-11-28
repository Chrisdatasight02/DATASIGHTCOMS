   
       function check_session()
       {
          $.ajax({
            url:"check_session_script/check_session.php",
            method:"POST",
            success:function(data)
            {
              if(data == '1')
              {
               // alert('Your session has been expired!');  
                window.location.href="login/index.php";
              }else{
                //console.log("session active");
              }
            }
          })
       }

        setInterval(function(){
          check_session();
          console.log("Checking");
        }, 2000);  //10000 means 10 seconds
