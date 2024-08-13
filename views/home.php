<h1 class="h1-info">More than a link shortener...</h1>
<div class="hero">


    <div class="hero-main" hx-ext="response-targets">
        <div></div>
        <div id="test-div" class="hero-input">
            <p class="input-info">Use URL shortener or QR generator and keep track of your connections...</p>
            <form id="generate-form">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="link-icon"></i>
                    </span>
                    <div id="wrongLink" style="flex:1;">
                        <input name="link" placeholder="Link it and ship it!" class="form-control" type="url">
                    </div>
                </div>
                <p id="wrongLink" style="margin-top:0.25rem; color:red;"> </p>
                <div class="hero-div-submit">
                    <!-- <span class="checkbox-span" title="To see statistics">
                        <input type="checkbox" id="checkbox-id">
                        <label for="checkbox-id">
                            <p style="user-select: none;">Insert views</p>
                        </label>
                    </span> -->
                    <button hx-post="/generate" class="hero-submit-button" 
                    hx-target="#test-div"
                    hx-target-error="#wrongLink"
                    hx-swap="innerHTML"
                    >Generate</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="stats-main">

</div>