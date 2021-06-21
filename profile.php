<?php
/*
Template Name: PROFILE
*/
 get_header(); ?>

<?php if (have_posts()): ?>

<main class="l-main">

  <section class="p-profile">
    <div class="p-profile__inner">

    <?php while (have_posts()): the_post(); ?>
    <?php $profile_name = get_field('profile_name'); ?>
    <?php $profile_ruby = get_field('profile_ruby'); ?>
    <?php $profile_occupation = get_field('profile_occupation'); ?>
    <?php $profile_age = get_field('profile_age'); ?>
    <?php $profile_camera_history = get_field('profile_camera_history'); ?>
    <?php $profile_birthplace = get_field('profile_birthplace'); ?>
    <?php $profile_equipment = get_field('profile_equipment'); ?>

      <div class="p-profile__img">
        <?php
        $image = get_field('profile_photo');
        if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>
      </div>

      <div class="p-profile__details-main">
        <?php if( $profile_ruby ): ?>
          <p class="p-profile__ruby"><?php the_field('profile_ruby'); ?></p>
        <?php endif; ?>

        <?php if( $profile_name ): ?>
          <p class="p-profile__name"><?php the_field('profile_name'); ?></p>
        <?php endif; ?>

        <?php if( $profile_occupation ): ?>
          <p class="p-profile__occupation"><?php the_field('profile_occupation'); ?></p>
        <?php endif; ?>
      </div>


      <table class="p-profile__details-sub c-table -ta-left -va-top">

        <?php if( $profile_age ): ?>
        <tr>
          <?php if( get_field('profile_age') ) {
          get_field('profile_age');
          $fielddata = get_field_object('profile_age');
          echo '<th>'. esc_html($fielddata['label']). '</th>';
          } ?>
          <td><?php the_field('profile_age'); ?>歳</td>
        </tr>
        <?php endif; ?>

        <?php if( $profile_camera_history ): ?>
        <tr>
          <?php if( get_field('profile_camera_history') ) {
          get_field('profile_camera_history');
          $fielddata = get_field_object('profile_camera_history');
          echo '<th>'. esc_html($fielddata['label']). '</th>';
          } ?>
          <td><?php the_field('profile_camera_history'); ?>年</td>
        </tr>
        <?php endif; ?>

        <?php if( $profile_birthplace ): ?>
        <tr>
          <?php if( get_field('profile_birthplace') ) {
          get_field('profile_birthplace');
          $fielddata = get_field_object('profile_birthplace');
          echo '<th>'. esc_html($fielddata['label']). '</th>';
          } ?>
          <td><?php the_field('profile_birthplace'); ?></td>
        </tr>
        <?php endif; ?>

        <?php if( $profile_equipment ): ?>
        <tr>
          <?php if( get_field('profile_equipment') ) {
          get_field('profile_equipment');
          $fielddata = get_field_object('profile_equipment');
          echo '<th>'. esc_html($fielddata['label']). '</th>';
          } ?>
          <td><?php the_field('profile_equipment'); ?></td>
        </tr>
        <?php endif; ?>

      </table>

    <?php endwhile; ?>

    </div>
  </section>

</main>
<?php endif; ?>

<?php get_footer(); ?>
