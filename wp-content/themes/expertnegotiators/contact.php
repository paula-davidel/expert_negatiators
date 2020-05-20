 <img src="<?php echo img_src(); ?>dots-grid-grey.png" alt="" class="contact-grid-dots">
        <img src="<?php echo img_src(); ?>grey-line.png" alt="" class="contact-grey-line">
        <div class="contact-form-div">
          <h1 class="contact-title">
            Contactati-ne
          </h1>
          <form class="contact-form" action="POST">
            <input placeholder="Nume..." type="text" />
            <input placeholder="Email..." type="email" />
            <input placeholder="Telefon..." type="text" />
            <input placeholder="Subiect..." type="text" />
            <textarea
              placeholder="Mesaj..."
              name="mesaj"
              cols="30"
              rows="10"
            ></textarea>
            <button type="submit" class="contact-btn btn">
              Trimite Mesaj
              <img src="<?php echo img_src(); ?>long-arrow.png" alt="long arrow" />
            </button>
          </form>
        </div>

        <div class="contact-map">
          <img src="<?php echo img_src(); ?>contact-map.png" alt="" />
        </div>