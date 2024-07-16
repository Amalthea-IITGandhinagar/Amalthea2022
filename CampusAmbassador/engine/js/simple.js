
        var email_global, dp_name_global;
        var inner_html = '<div class="catext"> CAMPUS AMBASSADOR PROGRAM </div> <hr> <div class="registrationText"> Please fill the below form (All fields are mandatory) </div> <br>  <div class="form-row "> <div class="form-group col-md-6"> <label> Full Name </label> <input name="fullname" id="fullname" type="text" class="form-control" placeholder="Full Name" required> </div> <div class="form-group col-md-6 "> <label for="gender"> Gender </label> <select name="gender" id="gender" class="form-control" required> <option value="" disabled selected style="display: none">--Please select an option--</option> <option>Male</option> <option>Female</option> <option>Other</option> </select> </div> </div> <div class="form-group"> <label> Institute Name & Address </label> <input name="institute" id="institute" class="form-control" placeholder="Ex: IIT Gandhinagar, Palaj, Gandhinagar, Gujarat" required> </div> <div class="form-row"> <div class="form-group col-md-6 "> <label for="courseofstudy"> Program </label> <select id="courseofstudy" name="courseofstudy" class="form-control" required> <option value="" disabled selected style="display: none">--Please select an option--</option> <option value="Bachelors">Bachelors</option> <option value="Masters">Masters</option> <option value="Doctorate">Doctorate</option> <option value="Other">Other</option> </select> </div> <div class="form-group col-md-6 "> <label for="year"> Graduating Year </label> <input type="number" name="year" id="year" min="2019" max="2026" class="form-control" placeholder="Ex: 2021" required> </div> </div> <div class="form-row "> <div class="form-group col-md-6 "> <label for="email"> Mail ID </label> <div class="input-group "> <input type="email" name="email" id="email" class="form-control" placeholder="Email" required> </div> </div> <div class="form-group col-md-6 "> <label for="contact_number"> Contact Number (WhatsApp) </label> <input type="text" name="contact_number" id="contact_number" class="form-control" pattern="[0-9]{10}" required> </div> </div> <div class="form-row "> <div class="form-group col-md-12"> <label for="twitter_id"> Twitter Username </label> <div class="input-group "> <div class="input-group-prepend "> <span class="input-group-text " id="inputGroupPrepend"><i class="fa fa-twitter"></i></span> </div> <input name="twitter_id" id="twitter_id" class="form-control" placeholder="If you don\'t have an account write NA"> </div> </div> <div class="form-group col-md-12"> <label for="facebook_id"> Facebook Username </label> <div class="input-group "> <div class="input-group-prepend "> <span class="input-group-text " id="inputGroupPrepend "><i class="fa fa-facebook"></i></span> </div> <input id="facebook_id" name="facebook_id" class="form-control " placeholder="If you don\'t have an account write NA"> </div> </div> </div> <div class="form-group"> <label for="facebook_id"> Instagram Username </label> <div class="input-group "> <div class="input-group-prepend "> <span class="input-group-text " id="inputGroupPrepend "><i class="fa fa-instagram"></i></span> </div> <input id="instagram_id" name="instagram_id" class="form-control " placeholder="If you don\'t have an account write NA"> </div> </div> <label for="q1"> As a Campus Ambassador, what do you expect from us? </label> <textarea id="q1" maxlength="2000" name="q1" class="form-control " placeholder="What do you expect from us?" style="height:100px !important;max-height:100px !important;min-height:100px !important;" required></textarea> <br><label for="q2"> By accepting you as our Campus Ambassador, what do you think we should expect from you? </label> <textarea id="q2" maxlength="2000" name="q2" class="form-control " placeholder="What do you think we should expect from you?" style="height:100px !important;max-height:100px !important;min-height:100px !important;" required></textarea> <br><br> <br>By clicking the submit button, you agree to our <a href="../termsandconditions/terms.pdf" style="text-align:left !important;">Terms & Conditions.</a><br><br></div> <div class="form-group"> <button type="submit"  id="btnsbt" onclick="submitForm()" class="btn btn-info" style="width: 100%"> Submit </button> </div> <br>';
        var firebaseConfig = {
        apiKey: "AIzaSyBoTd9aFav491piYUea8Tb1XaglTC8gHZE",
        authDomain: "aml19-82d49.firebaseapp.com",
        databaseURL: "https://aml19-82d49.firebaseio.com",
        projectId: "aml19-82d49",
        storageBucket: "aml19-82d49.appspot.com",
        messagingSenderId: "18892389245",
        appId: "1:18892389245:web:867289c3fcc70006"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        var db = firebase.firestore();
        var scrollEventHandler = function()
        {
        window.scroll(0, window.pageYOffset)
        }
        window.addEventListener("scroll", scrollEventHandler, false);

        /*function signOut(){
        console.log("Sign Out")
           firebase.auth().signOut().then(function() {
                window.location.href='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://amalthea.iitgn.ac.in/CampusAmbassador/register';
            }).catch(function(error) {
            });
        };  */

        function find_email(e){
            return e===email_global;
        }

        /*firebase.auth().onAuthStateChanged(function(user) {
        if (user) {

            var emails = [];
            var displayName = user.displayName;
            var email = user.email;
            email_global=email;
            dp_name_global=displayName;
            render();

            var account_info = '<div class="fixedInner"><div class="fixedInner2">Signed in as <span>'+email+'</span><br><a href="#" onclick="signOut()">Logout</a></div></div>';
            $(".fixedContent").html(account_info);
            var uid = user.uid;
            $(".fixedInner").fadeIn(2000);

            //console.log(displayName, email, uid);

        } else {
            console.log("no user");
            var provider = new firebase.auth.GoogleAuthProvider();
            provider.addScope('https://www.googleapis.com/auth/plus.login');
            firebase.auth().signInWithRedirect(provider);
        }
        });*/
        function submitForm() {
            var fullname = $("#fullname").val();
            var gender = $("#gender").val();
            var email = $("#email").val();
            var institute = $("#institute").val();
            var courseofstudy = $("#courseofstudy").val();
            var year = $("#year").val();
            var contact_number = $("#contact_number").val();
            var twitter_id = $("#twitter_id").val();
            var facebook_id = $("#facebook_id").val();
            var instagram_id = $("#instagram_id").val();
            var q1 = $("#q1").val();
            var q2 = $("#q2").val();
            var timestamp = new Date().toLocaleString();
            if(email ===null || fullname===null || gender===null || institute===null || courseofstudy===null|| year===null || contact_number===null || twitter_id===null || facebook_id===null  || instagram_id===null || q1===null || q2===null){
                error_show("Please fill all the fields");
            } else {

                if(email.trim()==="" || fullname.trim()==="" || gender.trim() ==="" || institute.trim()==="" || courseofstudy.trim()===""|| year.trim()==="" || contact_number.trim()==="" || twitter_id.trim()==="" || facebook_id.trim()===""  || instagram_id.trim()==="" || q1.trim()==="" || q2.trim()===""){
                    error_show("Please fill all the fields");
                }
                else {
                    if(parseInt(contact_number)<=9999999999){
                        var refe = db.collection('ca_20').where('email', '==', email);
                        refe.get().then(function (querySnapshot) {
                                var size = querySnapshot.size;
                                if(size===0){
                                    db.collection("ca_20").add({
                                                fullname:fullname,
                                                gender:gender,
                                                institute:institute,
                                                courseofstudy:courseofstudy,
                                                year:year,
                                                contact_number:contact_number,
                                                twitter_id:twitter_id,
                                                facebook_id:facebook_id,
                                                instagram_id:instagram_id,
                                                q1:q1,
                                                q2:q2,
                                                timestamp:timestamp,
                                                email: email,

                                            })
                                            .then(function(docRef) {
                                                render();
                                                error_show("Your response has been recorded.");
                                            })
                                            .catch(function(error) {
                                                //console.error("Error adding document: ", error);
                                            });

                                            var jqxhr = $.ajax({
                                                url: 'https://script.google.com/macros/s/AKfycbz6iWB0jBV1GO6vo6HHB2UZFDjjBdvFTs3P3m9j6iwrvzmyM2ez/exec',
                                                method: "GET",
                                                dataType: "json",
                                                data: {
                                                    FullName:fullname,
                                                    Gender:gender,
                                                    Institute:institute,
                                                    Program:courseofstudy,
                                                    Year:year,
                                                    ContactNumber:contact_number,
                                                    Twitter:twitter_id,
                                                    Facebook:facebook_id,
                                                    Instagram:instagram_id,
                                                    Q1:q1,
                                                    Q2:q2,
                                                    Timestamp:timestamp,
                                                    Email: email,
                                            }
                                            });


                            } else {
                                error_show("Please use another email.");
                                //render();
                            }
                        });


                    }
                    else {
                        error_show("Please fill valid phone number");
                    }
                }
            }

            //console.log(fullname, gender, institute, courseofstudy, year, email_global, contact_number, twitter_id, facebook_id, instagram_id, sop, one, two, three, four, five, six);
        }
        function error_show(e) {
        var x = document.getElementById("snackbar");
        x.innerHTML=e;
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
        function render(){
            $(".pageOneInnerContainerForm").html(inner_html);
            /*
            var refe = db.collection('ca_20').where('email', '==', email_global);
            refe.get().then(function (querySnapshot) {
                var size = querySnapshot.size;
                if(size===0){
                    $(".pageOneInnerContainerForm").html(inner_html);
                    $("#email").val(email_global);
                    $("#fullname").val(dp_name_global);
                } else {
                    var inner_html2 = '<div class="catext"> CAMPUS AMBASSADOR PROGRAM </div> <hr> <div class="registrationText" style="height:100vh !important;"> Thanks for filling the form. We\'ll contact you soon. </div> <br> ';

                    $(".pageOneInnerContainerForm").html(inner_html2);
                    error_show("Your response has been recorded.");
                }
            }); */
        }

        $(document).ready(()=>{
            render();
        });
