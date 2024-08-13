<h1 class="h1-info">More than a link shortener...</h1>
<div class="hero">


    <div class="hero-main">
        <div></div>
        <div id="test-div" class="hero-input">
            <p class="input-info">Use URL shortener or QR generator and keep track of your connections...</p>
            <form id="generate-form">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="link-icon"></i>
                    </span>
                    <input name="link" placeholder="Link it & ship it!" class="form-control" type="url" required>
                </div>
                <div class="hero-div-submit">
                    <span class="checkbox-span" title="To see statistics">
                        <input type="checkbox" id="checkbox-id">
                        <label for="checkbox-id">
                            <p style="user-select: none;">Insert views</p>
                        </label>
                    </span>
                    <button hx-post="/test" class="hero-submit-button" hx-target="#test-div" hx-swap="innerHTML">Generate</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="stats-main">

</div>