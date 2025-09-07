            <p>
                <label>Random Keyword Length</label>
                <input type="number" name="random_length" min="1" max="128" value="$random_length" />
            </p>
            <p><input type="submit" value="Save" class="button" /></p>
            </form>
        </main>
HTML;
}

function ozh_random_shorturl_settings_update() {
    $random_length = $_POST['random_length'];

    if( $random_length ) {
        if( is_numeric( $random_length ) ) {
            yourls_update_option( 'random_shorturls_length', intval( $random_length ) );
        } else {
            echo "Error: Length given was not a number.";
        }
    } else {
        echo "Error: No length value given.";
    }
}
