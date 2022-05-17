<?php include_once 'header.php';?>

        <section class="header">
            <h2>Profile</h2>
        </section>

        <section class="profile">
            <div id="profileheader">
                <h1>Username</h1>
                <p>Joined 0 months ago</p>  
            </div>
            <div id="followers">
                <p>Following: 0</p>
                <p>Followers: 0</p>
            </div>
            <div id="bio">
                <p>Profile Bio</p>
                <input type="text" id="commentbox" name="bio" placeholder="Write your bio">
                <button onclick="document.getElementById('commentbox').value=''"type="submit" class="commentsub">Submit</button>
            </div>
        </section>
    </div>
<?php include_once 'footer.php';?>