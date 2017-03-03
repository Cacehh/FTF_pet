
    // To conform clear all data in cart.
    function clear_cart() {
          var result = confirm('ARE YOU SURE YOU WANT TO CLEAR THE CART CONTENTS??');
          if (result) {
             //CHANGE ON DEPLOYEMENT
            //  FIXXX HERE
          window.location = "http://localhost/_ITProject/_FTF_v2/index.php/POS_ctr/clear";
       } else {
          return false; // cancel button
       }
    }
