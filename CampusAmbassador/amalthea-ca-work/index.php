<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amalthea '19 - CA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>              
    <script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.6/firebase-auth.js"></script> 
    <script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-storage.js"></script> 
    <link rel="icon" href="../engine/images/aml_icon.png">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
    <script>
        var file_nme = "bl";
    </script>
    <script src="custom.js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());    
      gtag('config', 'UA-148907672-1');
    </script>
    <script>
        var db = firebase.firestore();
        var urx = false;
        var user_global = null;
        var submitors_uid = null;
        var grant = null;
        var submissions = null;
        var docid = null;
        var points = null;
        firebase.auth().onAuthStateChanged(function(user){
            if (user) 
            {          
                var user_points = "";                                      
                user_global = user;          
                db.collection("ca_people_info").doc(user.uid).onSnapshot(function(doc) {
                    if(doc.data()===undefined){
                        db.collection("ca_people_info").doc(user.uid).set({
                            points: 0,
                            rights:false,
                            email:user.email,
                            name:user.displayName,
                            uid:user.uid,         
                            photoURL:user.photoURL,
                            submissions:0
                        })
                        //console.log("Written");
                    } else {
                        var data = doc.data();
                        submissions = data.submissions;
                        points = data.points;
                        urx = data.rights;
                        if(data.rights){
                            $("#profile").html('<img src="'+user.photoURL+'" class="imgdp"><br><br><h4 class="userName">'+user.displayName+'</h4><div class="userEmail">'+user.email+'</div><hr><h5>Admin</h5><button onclick="logout()" class="btn btn-primary btn-sm">Logout</button>');
                            $("#work_upload_from").html('<br><div class="card"><div class="card-body"><h4>Upload New Work</h4><br><input type="text" id="workTitle" class="form-control" placeholder="Work Title"/><br><textarea type="text" id="workDes" class="form-control" placeholder="Work Description"></textarea><br><input type="text" id="workDD" class="form-control" placeholder="Deadline date and time"/><br><input type="checkbox" name="imagetrue" id="workIT"><label for="workIT">&nbsp;&nbsp;Allow CAs to upload image</label><br><br><button onclick="uploadWork()" class="btn btn-success">Submit</button></div></div>');                            
                            db.collection("ca_work")
                            .onSnapshot(function(snapshot) {
                                $("#works").html('<br><h4>All works</h4>');
                                if (snapshot.size===0){
                                    $("#works").append('No work has been uploaded. Please upload work');
                                } ;
                                snapshot.forEach(function(doc) {
                                    $("#works").append(buildWork(doc.data(), doc.id));
                                });
                            }, function(error) {
                                    //console.log(error);
                            });

                            
                            db.collection("ca_people_info").where("rights","==",false)
                            .onSnapshot(function(snapshot) {
                                $("#all_user_points").html('<br><h4>All CAs</h4><br><ul class="list-group"></ul>');                                
                                snapshot.forEach(function(doc) {
                                    
                                    $("#all_user_points ul").append(buildProfile(doc.data(), doc.id));
                                });
                            }, function(error) {
                                    //console.log(error);
                            });


                        } else {
                            $("#profile").html('<img src="'+user.photoURL+'" class="imgdp"><br><br><h4 class="userName">'+user.displayName+'</h4><div class="userEmail">'+user.email+'</div><hr><h5>'+data.points+' <i class="fa fa-star"></i> Points</h5>'+data.submissions+' Submissions<hr><button onclick="logout()" class="btn btn-primary btn-sm">Logout</button>');
                            db.collection("ca_work")
                            .onSnapshot(function(snapshot) {
                                $("#works_for_CAs").html('<br><h4>All works</h4>');
                                if (snapshot.size===0){
                                    $("#works_for_CAs").append('No work has been uploaded. Wait for the Amalthea team to upload work');
                                } ;
                                //console.log(snapshot.size);
                                snapshot.forEach(function(doc) {
                                    $("#works_for_CAs").append(buildWorkCA(doc.data(), doc.id));
                                });
                            }, function(error) {
                                    //console.log(error);
                            });

                            db.collection("ca_people_info").where("rights","==",false)
                            .onSnapshot(function(snapshot) {
                                var final_list = [];
                                $("#ca_list_for_cas").html('<br><h5><div style="float:left;">&nbsp;&nbsp;&nbsp;All CAs</div><div style="float:right;">Rank&nbsp;&nbsp;&nbsp;</div></h5><br><ul style="max-height:70vh;overflow-x:auto;" class="list-group"></ul>');                                
                                var rank = 1;
                                snapshot.forEach(function(doc) {                      
                                    final_list.push([doc.data(), doc.id]);                                                  
                                });
                                final_list.sort(function (a, b) {                                        
                                        if (a[0]['points'] <= b[0]['points']) {
                                            return 1;
                                        } else {
                                            return -1;
                                        }
                                    });
                                final_list.forEach(function(entry){
                                    $("#ca_list_for_cas ul").append(buildProfileforCA(entry[0], entry[1], rank));//buildProfile(doc.data(), doc.id));
                                    rank++;
                                });                                
                            }, function(error) {
                                    //console.log(error);
                            });
                        }
                        
                    }
                });
                      

                /*firebase.auth().signOut().then(function() {
                    console.log("Signed Out");
                    window.location.href='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=https://amalthea.iitgn.ac.in/CampusAmbassador/amalthea-ca-work';
                }).catch(function(error) {
                    
                });*/
                
            }  else {

                var provider = new firebase.auth.GoogleAuthProvider();
                firebase.auth().signInWithRedirect(provider).then(function(result) {            
                    var token = result.credential.accessToken;            
                    var user = result.user;            
                }).catch(function(error) {            
                    var errorCode = error.code;
                    var errorMessage = error.message;            
                    var email = error.email;            
                    var credential = error.credential;            
                }); 
            }
        });
        function logout(){
            firebase.auth().signOut().then(function() {
                    //console.log("Signed Out");
                    window.location.href='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://amalthea.iitgn.ac.in/CampusAmbassador/amalthea-ca-work';
            }).catch(function(error) {
                
            });
        }

        function buildWork(data, docid){
            return '<br><div class="card"><div class="card-body"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#submissionLoader" onclick="loadsubmissions(\''+docid+'\')" style="float:right;">Load Submissions</button><h5>'+data.title+'</h5>'+data.desciption+'<hr><div class="row"><div class="col-md-6" style="color:red;">Deadline : '+data.deadline+'</div><div class="col-md-6">Uploaded on : '+data.uploaded_timestamp+'</div></div></div></div>';
        }
        function buildWorkCA(data, docid){
            
            //console.log(data.submitors_uid);
            var uid = user_global.uid;

            if(data.submitors_uid.includes(uid)){
                var msg = '<button class="btn btn-success btn-sm" style="float:right;"><i class="fa fa-check"></i> Submitted</button>';
            } else {
                var msg = '<button class="btn btn-primary btn-sm" style="float:right;" data-toggle="modal" data-target="#submitWork" onclick="submitWork1(\' '+data.submitors_uid+' \',\''+docid+'\', '+data.image_allow+')">Submit Work</button>';
            }
            return '<br><div class="card"><div class="card-body">'+msg+'<h5>'+data.title+'</h5>'+data.desciption+'<hr><div class="row"><div class="col-md-6" style="color:red;">Deadline : '+data.deadline+'</div><div class="col-md-6">Uploaded on : '+data.uploaded_timestamp+'</div></div></div></div>';
        }
        function buildProfile(data, did){
            return '<li class="list-group-item"><img src="'+data.photoURL+'" style="float:left;width:50px;border-radius:100%;"><div style="float:left;margin-left:20px;"><b>'+data.name+'</b><br>'+data.email+'<br><i class="fa fa-star"></i> '+data.points+' Points</div> <div style="float:right;"><br><button  onclick="changePoints(\''+did+'\', '+(data.points+1)+')" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i> Increase Points</button> &nbsp;&nbsp;<button  onclick="changePoints(\''+did+'\','+(data.points-1)+')" class="btn btn-danger btn-sm"><i class="fa fa-arrow-down"></i> Decrease Points</button><br>'+data.submissions+' Submissions</div></li>';
        }
        function buildProfileforCA(data, did, rank){
            return '<li class="list-group-item"><img src="'+data.photoURL+'" style="float:left;width:50px;border-radius:100%;"><div style="float:left;margin-left:20px;"><b>'+data.name+'</b><br><i class="fa fa-star"></i> '+data.points+' Points</div> <div style="float:right;color:#ffffff;background:#1E4BD2;text-align:center;padding-top:3px;width:28px;height:28px;border-radius:100%;">'+rank+'</div></li>';
        }
        function uploadWork(){
            if(urx){
                var workTitle = $('#workTitle').val().trim();
                var workDes = $('#workDes').val().trim();
                var workDD = $('#workDD').val().trim();
                var workIT = $('#workIT').is(':checked'); 
                if(workTitle!=""&&workDes!=""&&workDD!=""){

                    //Check rights 
                    var docRef = db.collection("ca_people_info").doc(user_global.uid);
                    docRef.get().then(function(doc) {
                        if (doc.exists) {                    
                            if(doc.data().rights){                                           
                                var data_to_insert = {
                                    "title":workTitle,
                                    "desciption":workDes,
                                    "deadline":workDD,                                      
                                    "uploaded_timestamp":new Date().toLocaleString(),   
                                    "by_name":user_global.displayName,
                                    "by_id":user_global.uid,
                                    "submissions":0,
                                    "submitors_uid":['test'],    
                                    "image_allow":workIT                
                                }                                
                                db.collection("ca_work").add(data_to_insert)
                                .then(function(docRef) {                                  
                                    showToast("Work Uploaded");
                                    $('#workTitle').val('')
                                    $('#workDes').val('')
                                    $('#workDD').val('')
                                })
                                .catch(function(error) {
                                    showToast("Some error");
                                });

                            } else {
                                showToast("Some error");
                            }
                        } 
                    }).catch(function(error) {
                        showToast("Some error");
                    });



                } else {
                    showToast("Some error");
                }
            } else {
                showToast("Some error");
            }            
        }
        
        function changePoints(did, new_points){
            var docRef = db.collection("ca_people_info").doc(user_global.uid);
            docRef.get().then(function(doc) {
                if (doc.exists) {  
                        if(doc.data().rights){
                            db.collection("ca_people_info").doc(did).update({
                                points:new_points
                            }).then((e)=>{

                            }).catch((e)=>{

                            });
                        }
                }
            });

        }

        function showToast(text) {
            var x = document.getElementById("snackbar");
            x.innerHTML = text;
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
        var image_allow = null;

        function submitWork1(submitors__uid,doc_id, image__allow){
            grant = false;
            image_allow = false;
            if(!urx){
                if(!submitors__uid.includes(user_global.uid)){
                    grant = true;
                    docid = doc_id;   
                    submitors_uid = submitors__uid;

                    if(image__allow){
                        image_allow = true;
                        
                        $("#fileYN").css('display','block');
                    }
                    else {
                        $("#fileYN").css('display','none');
                    }
                } 
            }
        }
        var selected_file = null;
        $(document).ready(()=>{
            $("#theFile").on('change',function(e){
                //console.log("Working");
                selected_file  = e.target.files[0];
                //console.log(selected_file.name);
            });

        });
        
        function submitWork2(){
            if(grant){
                if(!urx){
                    var input = $("#workSubmissionText").val().trim();
                    if(input.length<1000 && input != ""){
                        var image_src  = null;
                        if(image_allow){
                            
                            //var filename = + new Date();
                            var storageRef = firebase.storage().ref('/ca_submissions/'+selected_file.name);                                                        
                            var uploadTask = storageRef.put(selected_file);
                            uploadTask.on('state_changed', function(snapshot){

                            }, function(error){

                            }, function(){
                                uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                                            var data_to_insert = {
                                                    "work_id":docid,   
                                                    "summary":input,                                                                                   
                                                    "submission_timestamp":new Date().toLocaleString(),   
                                                    "by_name":user_global.displayName,
                                                    "by_id":user_global.uid,
                                                    "image_src":downloadURL             
                                                }                                
                                                db.collection("ca_work_submissions").add(data_to_insert)
                                                .then(function(docRef) {                                  
                                                    db.collection("ca_people_info").doc(user_global.uid).update({
                                                        "submissions":submissions+1,
                                                        "points":points+0
                                                    }).then((e)=>{
                                                        //console.log(submitors_uid);
                                                        submitors_uid = submitors_uid.split(',');
                                                        submitors_uid.push(user_global.uid);
                                                        
                                                        db.collection("ca_work").doc(docid).update({
                                                            "submitors_uid":firebase.firestore.FieldValue.arrayUnion(user_global.uid)
                                                        }).then((e)=>{
                                                            showToast("Submission Successfull!");
                                                        }).catch((e)=>{
                                                            //console.log(e);
                                                            showToast("Some error1");
                                                        });   
                                                    }).catch((e)=>{
                                                        //console.log(e);
                                                        showToast("Some error2");
                                                    });                           
                                                })
                                                .catch(function(error) {
                                                    showToast("Some error3");
                                                });
                                });
                            });

                        } else {
                        var data_to_insert = {
                                "work_id":docid,   
                                "summary":input,                                                                                   
                                "submission_timestamp":new Date().toLocaleString(),   
                                "by_name":user_global.displayName,
                                "by_id":user_global.uid,
                                "image_src":image_src             
                            }                                
                            db.collection("ca_work_submissions").add(data_to_insert)
                            .then(function(docRef) {                                  
                                db.collection("ca_people_info").doc(user_global.uid).update({
                                    "submissions":submissions+1,
                                    "points":points+0
                                }).then((e)=>{
                                    //console.log(submitors_uid);
                                    
                                    
                                    db.collection("ca_work").doc(docid).update({
                                        "submitors_uid":firebase.firestore.FieldValue.arrayUnion(user_global.uid)
                                    }).then((e)=>{
                                        showToast("Submission Successfull!");
                                    }).catch((e)=>{
                                        //console.log(e);
                                        showToast("Some error1");
                                    });   
                                }).catch((e)=>{
                                    //console.log(e);
                                    showToast("Some error2");
                                });                           
                            })
                            .catch(function(error) {
                                showToast("Some error3");
                            });
                        }
                    }
                }
            }
        }
                
        function loadsubmissions(docid){            
            if(urx){
                db.collection("ca_work_submissions").where("work_id", "==", docid)
                .get()
                .then(function(querySnapshot) {
                    if (querySnapshot.size===0){
                        $("#msgdiv").html('<div class="alert alert-warning">No submissions yet.</div>');
                    } else {
                        $("#msgdiv").html('<div class="alert alert-success">'+querySnapshot.size+' Submissions</div>');    
                    }
                    $('#submissions_list').html('');
                    querySnapshot.forEach(function(doc) {
                        $('#submissions_list').append('<hr>'+buildSubmission(doc.data()));
                        console.log(doc.data());
                    });
                })
                .catch(function(error) {
                    console.log("Error getting documents: ", error);
                });
            }        
        }

        function buildSubmission(data){
            var img = "";
            if(data.image_src!=null){
                img = '<img src="'+data.image_src+'" style="width:100%;"/>';
            }
            return '<div><div style="float:left;"><b>'+data.by_name+'</b></div><div style="float:right;"><b>'+data.submission_timestamp+'</b></div></div><br>'+data.summary+' '+img;
        }
    </script>
    <style>

    ::-webkit-scrollbar {
        width: 5px;
        /*display: none;*/
    }
    
    ::-webkit-scrollbar-track {
    
    
    }
    
    ::-webkit-scrollbar-track-piece
    {
        background-color:transparent;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background:#454B69;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background:#3E435E; 
    }
        .imgdp {
            width:20%;
            border-radius:100%;        
        }
        #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
        }

        #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
        }
    </style>
</head>
<body style="background:#f5f5f5;font-family: 'DM Sans', sans-serif;">
    <div id="snackbar"></div>    
    <div class="container">
        <div class="row">                
            <div class="col-md-4">
                <br><br>
                <div class="card">
                    <div class="card-body text-center" id="profile">      
                        Waiting for authentication...                  
                    </div>
                </div>
                <div id="work_upload_from"></div>
                <div id="ca_list_for_cas" ></div>
                
            </div>
            <div class="col-md-8">
                <br><br>
                <div id="all_user_points"></div> 
                <div id="works"></div>     
                <div id="works_for_CAs"></div>                                                            
            </div>    
            
        </div>
    </div>
    <br><br><br>
    <div class="modal fade" id="submitWork" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Work Submission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" placeholder="Write summary of your work very very briefly..." id="workSubmissionText"></textarea>
                <div  id="fileYN">
                    <br>Please upload an image : <br><input type="file" id="theFile" >
                </div>
            </div>
            <div class="modal-footer">                
                <button type="button" class="btn btn-primary"   data-dismiss="modal" onclick="submitWork2()">Submit</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="submissionLoader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="width:100vw !important;">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">All Submissions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="overflow-y:auto;max-height:70vh;">                         
                <div id="msgdiv"></div>
                <br>
                <div  id="submissions_list"></div>       
            </div>
            <div class="modal-footer">                
                <button type="button" class="btn btn-primary"   data-dismiss="modal" >Close</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>