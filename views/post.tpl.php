
<div class= "container">

    <!-- <form method="post" action="/guestbook/postnewmsg" name="RegisterForm"> -->
    <form method="post" name="form-newpost">
      <div class= "container row justify-content-center">
        <input type="hidden" name="action" value="newpost">
        <div class="col-66">
          <label for="PostTitle">Titel</label>
          <input type="text" name="postTitle" id="PostTitle" class="input-control mar-tb" placeholder="Titel" required>
        </div>
        <div class="col-66">
          <label for="newpost">Neue Post</label>
          <textarea class="input-control mar-tb" name="postText" id="newpost" cols="30" rows="10"></textarea>
        </div>
        <button id="posten" class="btn col-66 mar-tb">Posten</button>
      </div>
    </form>

</div>