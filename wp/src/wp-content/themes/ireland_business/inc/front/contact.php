<div class="ieb-contact">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maxime cum exercitationem delectus, placeat et laboriosam adipisci voluptatum veniam tenetur animi itaque ullam rem harum velit dolor possimus ut non!</p>

    <form method="post" class="ieb-contact__form" action="#">
        <div class="ieb-contact__form__field">
            <label for="ieb-input-name"><?php _e('Имя', 'ieb'); ?></label>
            <input type="text"
                name="name" 
                id="ieb-input-name"
                class="ieb-contact__form__field__text"
                placeholder="<?php _e('Имя', 'ieb'); ?>"
            >
        </div> <!-- / .ieb-contact__form__field -->

        <div class="ieb-contact__form__field">
            <label for="ieb-input-gender"><?php _e('Пол', 'ieb'); ?></label>
            <select name="gender" 
                id="ieb-input-gender"
                class="ieb-contact__form__field__select"
            >
                <option value="men"><?php _e('Мужской', 'ieb'); ?></option>
                <option value="women"><?php _e('Женский', 'ieb'); ?></option>
            </select>
        </div> <!-- / .ieb-contact__form__field -->

        <div class="ieb-contact__form__field">
            <button type="submit" name="submit" class="ieb-contact__form__field__submit">
                <?php _e('Отправить', 'ieb'); ?>
            </button>
        </div> <!-- / .ieb-contact__form__field -->
    </form> <!-- / .ieb-contact__form -->
</div> <!-- / .ieb-contact -->