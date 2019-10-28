<footer id='certifications'>
            <ul id='link-list'>
                <?php 
                $certifications = get_field('certifications');
                $social_media = get_field('social_media');
                foreach($certifications as $certification) {
                    $cert_url = $certification['certifications_link'];
                    $cert_name = $certification['certifications_name'];
                    echo "<li class='list-item'><a class='footer-item' target='_blank' href='$cert_url'>$cert_name</a></li>";
                }
                ?>
            </ul>
            <div id='footer-bottom'>
                <p id='footer-text'><img id='copyright' src='<?php /*function to access pathway*/ echo get_template_directory_uri() ?>/copyright.png'/>Made by Charlotte</p>         
                <div id='social'>
                    <?php
                    foreach($social_media as $social) {
                        $social_url = $social['social_media_link'];
                        $social_logo = $social['social_media_logo']['url'];
                        $social_alt = $social['social_media_alt_text'];
                        echo "<a href='$social_url' target='_blank'><img src='$social_logo' alt='$social_alt'></a>";
                    }
                    ?>
                </div>
            </div>
        </footer>
        <?php
            wp_footer();            
        ?>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    </body>
</html>