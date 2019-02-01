<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <!-- Advantages -->
    <section id="advantages" style="background-image: url('<?php the_field('section_two_background'); ?>')">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-heading text-uppercase"><?php the_field('section_two_title'); ?></h2>
          </div>
        </div>
        <div class="row">
          <?php $list = get_field('section_two_list'); ?>
          <?php foreach($list as $value): ?>
          <div class="col-12 col-md-3 mb-3">
            <div class="advantage-item d-flex flex-column align-items-center text-center h-100">
              <img src="<?php echo $value['image']; ?>">
              <div class="title"><?php echo $value['title']; ?></div>
              <p class="text"><?php echo $value['text']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Knowledge -->
    <section id="knowledge" style="background-image: url('<?php the_field('section_three_background'); ?>')">
      <div class="container">
        <div class="row position-relative">
          <div class="icon d-none d-md-block" style="background-image: url('<?php the_field('section_three_image'); ?>')"></div>
          <div class="col-12 offset-md-4 col-md-8">
            <div class="ml-3 text-white">
              <div class="title"><?php the_field('section_three_title'); ?></div>
              <p class="text"><?php the_field('section_three_text'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase"><?php the_field('section_four_title'); ?></h2>
                </div>
            </div>
            <div class="row">
              <div class="offset-md-1 col-md-10 col-12">
                <?php $list = get_field('section_four_work'); ?>
                <div class="portfolio">
                <?php foreach($list as $value): ?>
                  <div class="portfolio-item">
                    <div class="row">
                      <div class="col-12 text-center">
                        <div class="title"><?php echo $value['title']; ?></div>
                      </div>
                      <div class="col-12 col-md-5">
                        <div class="text">
                          <b>Клиент:</b> <?php echo $value['client']; ?>
                        </div>
                        <div class="text">
                          <b>Цель:</b> <?php echo $value['target']; ?>
                        </div>
                        <div class="text">
                          <b>Срок достижения цели:</b> <?php echo $value['term']; ?>
                        </div>
                        <div class="text">
                          <b>Рекламный бюджет:</b> <?php echo $value['budget']; ?>
                        </div>
                      </div>
                      <div class="offset-md-1 col-md-5 col-12">
                        <ul class="points">
                        <?php foreach($value['list'] as $li): ?>
                        <li><?php echo $li['paragraph']; ?></li>
                        <?php endforeach; ?>
                        </ul>
                      </div>
                      <div class="col-12">
                        <div class="description"><?php echo $value['text']; ?></div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                </div>
              </div>
            </div>
        </div>
    </section>

    <!-- Advantages -->
    <section id="working" style="background-image: url('<?php the_field('section_five_background'); ?>')">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-heading text-uppercase"><?php the_field('section_five_title'); ?></h2>
          </div>
        </div>
        <div class="row">
          <?php $list = get_field('section_five_list'); ?>
          <?php foreach($list as $key => $value): ?>
          <div class="col-12 col-md-3 mb-3">
            <div class="working-item d-flex flex-column align-items-center text-left h-100">
              <div class="step d-flex align-items-center justify-content-center"><span><?php echo $key + 1; ?> шаг</span></div>
              <img src="<?php echo $value['image']; ?>">
              <div class="title"><?php echo $value['title']; ?></div>
              <?php echo $value['text']; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Action -->
    <section id="action" style="background-image: url('<?php the_field('section_six_background'); ?>')">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-heading text-uppercase text-white"><?php the_field('section_six_title'); ?></h2>
            <a class="btn btn-primary btn-xl btn-round btn-glow text-uppercase js-scroll-trigger" href="<?php echo get_field('section_six_button')['url']; ?>"><?php echo get_field('section_six_button')['text']; ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Experts -->
    <section id="experts">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-heading text-uppercase"><?php the_field('section_seven_title'); ?></h2>
            <p class="section-sub"><?php the_field('section_seven_subtitle'); ?></p>
          </div>
        </div>
        <div class="row">
          <?php $list = get_field('section_seven_list'); ?>
          <?php foreach($list as $value): ?>
          <div class="col-12 col-md-3 mb-3">
            <div class="experts-item d-flex flex-column align-items-center text-center h-100">
              <div class="experts-bg one"></div>
              <span class="number text-primary"><?php echo $value['number']; ?></span>
              <span class="name"><?php echo $value['text']; ?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Results -->
    <section id="results" style="background-image: url('<?php the_field('section_eight_background'); ?>')">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="section-subheading"><?php the_field('section_eight_title'); ?></div>
          </div>
        </div>
        <div class="row">
          <?php $list = get_field('section_eight_list'); ?>
          <?php foreach($list as $value): ?>
          <div class="col-12 col-md-4 mb-3">
            <div class="results-item d-flex flex-column align-items-center text-center h-100">
              <img src="<?php echo $value['image']; ?>">
              <span class="name"><?php echo $value['title']; ?></span>
              <p class="text"><?php echo $value['text']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section id="team" style="background-image: url('<?php the_field('section_nine_background'); ?>')">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-heading text-uppercase"><?php the_field('section_nine_title'); ?></h2>
            <p class="section-sub"><?php the_field('section_nine_subtitle'); ?>
          </div>
        </div>
        <div class="row">
          <?php $list = get_field('section_nine_list'); ?>
          <?php foreach($list as $value): ?>
          <div class="col-12 col-md-3 mb-3">
            <div class="team-member">
              <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
              <span class="text-uppercase name"><?php echo $value['title'] ?></span>
              <p class="text-muted text"><?php echo $value['text'] ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" style="background-image: url('<?php the_field('section_ten_background'); ?>')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 mb-3">
            <div class="contact-item">
              <span class="title"><?php echo get_field('section_ten_block_one')['title']; ?></span>
              <p><?php echo get_field('section_ten_block_one')['text']; ?></p>
            </div>
            <div class="contact-item">
              <span class="title"><?php echo get_field('section_ten_block_two')['title']; ?></span>
              <p><?php echo get_field('section_ten_block_one')['text']; ?></p>
            </div>
          </div>
          <div class="col-12 offset-md-1 col-md-5">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <span class="head">Получить персональное предложение</span>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="name">Имя</label>
                    <input class="form-control" id="name" type="text" autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group required">
                    <label for="phone">Телефон</label>
                    <input class="form-control tel" id="phone" type="tel" autocomplete="off" required="required" data-validation-required-message="Пожалуйста, введите свой телефон.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group required">
                    <label for="site">Сайт</label>
                    <input class="form-control" id="site" type="text" autocomplete="off" required="required" data-validation-required-message="Пожалуйста, введите свой сайт.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="accept" required="required" checked="checked" data-validation-required-message="Вы должны согласиться с условиями.">
                      <label class="custom-control-label" for="accept">Даю согласие на обработку персональных данных</label>
                    </div>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-glow btn-xl text-uppercase" type="submit">получить предложение сейчас</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php get_footer();
