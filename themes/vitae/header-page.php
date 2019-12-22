<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/custom-fonts.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/responsive.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]--> 
  <svg style="display: none;">
    <!-- Footer Svg -->
    <symbol id="ftr-fb-icon-svg" width="11" height="19" viewBox="0 0 11 19" xmlns="http://www.w3.org/2000/svg">
    <path d="M7 11.0631H9.5L10.5 7.44283H7V5.63269C7 4.70046 7 3.82254 9 3.82254H10.5V0.781495C10.174 0.742577 8.943 0.654785 7.643 0.654785C4.928 0.654785 3 2.15449 3 4.90863V7.44283H0V11.0631H3V18.7562H7V11.0631Z"/>
    </symbol>
    <symbol id="ftr-twiter-icon-svg" width="22" height="16" viewBox="0 0 22 16" xmlns="http://www.w3.org/2000/svg">
      <path d="M21.1623 1.96379C20.3989 2.26943 19.5893 2.47016 18.7603 2.55933C19.634 2.08637 20.288 1.34202 20.6003 0.46499C19.7803 0.906666 18.8813 1.2162 17.9443 1.38364C17.3149 0.774144 16.4807 0.369925 15.5713 0.233821C14.6618 0.0977176 13.7282 0.237357 12.9156 0.631029C12.1029 1.0247 11.4567 1.65035 11.0774 2.41071C10.6981 3.17107 10.607 4.02354 10.8183 4.83559C9.15541 4.76016 7.52863 4.36905 6.04358 3.68765C4.55854 3.00626 3.24842 2.04982 2.1983 0.880419C1.82659 1.45826 1.63125 2.11514 1.6323 2.78379C1.6323 4.09614 2.3703 5.25554 3.4923 5.93435C2.82831 5.91543 2.17893 5.75314 1.5983 5.461V5.50806C1.5985 6.38209 1.93267 7.22916 2.54414 7.90565C3.15562 8.58214 4.00678 9.04642 4.9533 9.21976C4.33691 9.37094 3.6906 9.39323 3.0633 9.28493C3.33016 10.0373 3.8503 10.6952 4.55089 11.1667C5.25147 11.6381 6.09742 11.8995 6.9703 11.9142C6.10278 12.5308 5.10947 12.9867 4.04718 13.2556C2.98488 13.5246 1.87442 13.6015 0.779297 13.4818C2.69099 14.5945 4.91639 15.1852 7.1893 15.1833C14.8823 15.1833 19.0893 9.41526 19.0893 4.41292C19.0893 4.25001 19.0843 4.08528 19.0763 3.92418C19.8952 3.38853 20.6019 2.72498 21.1633 1.9647L21.1623 1.96379Z"/>
    </symbol>
    <symbol id="ftr-ins-icon-svg" width="20" height="19" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
      <path d="M10 0.654785C12.717 0.654785 13.056 0.663836 14.122 0.709089C15.187 0.754343 15.912 0.905491 16.55 1.12995C17.21 1.35984 17.766 1.67118 18.322 2.1735C18.8305 2.62594 19.224 3.17323 19.475 3.77729C19.722 4.35382 19.89 5.0109 19.94 5.9748C19.987 6.93961 20 7.24643 20 9.70552C20 12.1646 19.99 12.4714 19.94 13.4362C19.89 14.4001 19.722 15.0563 19.475 15.6337C19.2247 16.2381 18.8311 16.7856 18.322 17.2375C17.822 17.6976 17.2173 18.0537 16.55 18.2811C15.913 18.5046 15.187 18.6567 14.122 18.7019C13.056 18.7445 12.717 18.7562 10 18.7562C7.283 18.7562 6.944 18.7472 5.878 18.7019C4.813 18.6567 4.088 18.5046 3.45 18.2811C2.78233 18.0543 2.17753 17.6982 1.678 17.2375C1.16941 16.7852 0.775931 16.2379 0.525 15.6337C0.277 15.0572 0.11 14.4001 0.0599999 13.4362C0.0129999 12.4714 0 12.1646 0 9.70552C0 7.24643 0.00999994 6.93961 0.0599999 5.9748C0.11 5.01 0.277 4.35472 0.525 3.77729C0.775236 3.17286 1.1688 2.62542 1.678 2.1735C2.17767 1.71302 2.78243 1.35688 3.45 1.12995C4.088 0.905491 4.812 0.754343 5.878 0.709089C6.944 0.666551 7.283 0.654785 10 0.654785ZM10 5.18015C8.67392 5.18015 7.40215 5.65693 6.46447 6.5056C5.52678 7.35427 5 8.50532 5 9.70552C5 10.9057 5.52678 12.0568 6.46447 12.9054C7.40215 13.7541 8.67392 14.2309 10 14.2309C11.3261 14.2309 12.5979 13.7541 13.5355 12.9054C14.4732 12.0568 15 10.9057 15 9.70552C15 8.50532 14.4732 7.35427 13.5355 6.5056C12.5979 5.65693 11.3261 5.18015 10 5.18015ZM16.5 4.95388C16.5 4.65383 16.3683 4.36607 16.1339 4.1539C15.8995 3.94174 15.5815 3.82254 15.25 3.82254C14.9185 3.82254 14.6005 3.94174 14.3661 4.1539C14.1317 4.36607 14 4.65383 14 4.95388C14 5.25393 14.1317 5.54169 14.3661 5.75386C14.6005 5.96603 14.9185 6.08522 15.25 6.08522C15.5815 6.08522 15.8995 5.96603 16.1339 5.75386C16.3683 5.54169 16.5 5.25393 16.5 4.95388ZM10 6.9903C10.7956 6.9903 11.5587 7.27636 12.1213 7.78557C12.6839 8.29477 13 8.9854 13 9.70552C13 10.4256 12.6839 11.1163 12.1213 11.6255C11.5587 12.1347 10.7956 12.4207 10 12.4207C9.20435 12.4207 8.44129 12.1347 7.87868 11.6255C7.31607 11.1163 7 10.4256 7 9.70552C7 8.9854 7.31607 8.29477 7.87868 7.78557C8.44129 7.27636 9.20435 6.9903 10 6.9903Z"/>
      </symbol>
      <symbol 
      id="ftr-message-icon-svg" width="18" height="20" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M7.076 8.80044C7.676 8.80044 8.162 9.20773 8.151 9.70552C8.151 10.2033 7.677 10.6106 7.076 10.6106C6.486 10.6106 6 10.2033 6 9.70552C6 9.20773 6.475 8.80044 7.076 8.80044ZM10.924 8.80044C11.525 8.80044 12 9.20773 12 9.70552C12 10.2033 11.525 10.6106 10.924 10.6106C10.334 10.6106 9.849 10.2033 9.849 9.70552C9.849 9.20773 10.323 8.80044 10.924 8.80044ZM15.891 0.654785C17.054 0.654785 18 1.52909 18 2.61246V19.6613L15.789 17.8557L14.544 16.7913L13.227 15.66L13.773 17.4186H2.109C0.946 17.4186 0 16.5442 0 15.4609V2.61246C0 1.52909 0.946 0.654785 2.109 0.654785H15.89H15.891ZM11.921 13.0661C14.194 13 15.069 11.6216 15.069 11.6216C15.069 8.5615 13.587 6.0807 13.587 6.0807C12.107 5.05525 10.697 5.08331 10.697 5.08331L10.553 5.23536C12.302 5.72953 13.114 6.44273 13.114 6.44273C12.1591 5.95579 11.1066 5.64566 10.018 5.53041C9.32744 5.45982 8.62993 5.4659 7.941 5.54852C7.879 5.54852 7.827 5.55847 7.766 5.56752C7.406 5.59648 6.531 5.71957 5.431 6.16668C5.051 6.32778 4.824 6.44273 4.824 6.44273C4.824 6.44273 5.678 5.69152 7.529 5.19735L7.426 5.08331C7.426 5.08331 6.017 5.05525 4.536 6.0816C4.536 6.0816 3.055 8.5615 3.055 11.6216C3.055 11.6216 3.919 12.9991 6.192 13.0661C6.192 13.0661 6.572 12.6389 6.882 12.2777C5.575 11.9157 5.082 11.1554 5.082 11.1554C5.082 11.1554 5.184 11.2224 5.369 11.3175C5.379 11.3265 5.389 11.3365 5.41 11.3455C5.441 11.3654 5.472 11.3745 5.503 11.3935C5.76 11.5265 6.017 11.6306 6.253 11.7166C6.675 11.8686 7.179 12.0207 7.766 12.1257C8.64532 12.2817 9.54941 12.2848 10.43 12.1347C10.9429 12.0519 11.4433 11.9149 11.921 11.7265C12.281 11.6025 12.682 11.4215 13.104 11.1654C13.104 11.1654 12.59 11.9447 11.242 12.2967C11.551 12.6579 11.922 13.0661 11.922 13.0661H11.921Z"/>
      </symbol>
      <symbol id="ftr-emoj-icon-svg" width="23" height="18" viewBox="0 0 23 18" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.1018 4.91782L10.8528 1.71748C10.9074 1.48492 11.0122 1.26439 11.161 1.06847C11.3099 0.872552 11.4999 0.705094 11.7203 0.57566C11.9406 0.446227 12.187 0.357353 12.4453 0.314116C12.7037 0.27088 12.9689 0.274127 13.2258 0.323673L16.4218 0.939122C16.7164 0.643001 17.1108 0.443144 17.5437 0.37055C17.9766 0.297957 18.4239 0.356683 18.8161 0.53762C19.2084 0.718558 19.5238 1.01159 19.7133 1.37128C19.9028 1.73096 19.9559 2.13719 19.8643 2.52696C19.7727 2.91673 19.5415 3.26826 19.2067 3.52701C18.8719 3.78577 18.4521 3.93729 18.0124 3.95809C17.5727 3.97888 17.1377 3.86778 16.7749 3.64202C16.4121 3.41626 16.1418 3.08845 16.0058 2.70945L12.8098 2.094L12.1438 4.9314C13.9278 5.05539 15.7008 5.5921 17.3068 6.47002C17.784 6.22986 18.3214 6.10453 18.8674 6.10599C19.4134 6.10746 19.9499 6.23568 20.4256 6.4784C20.9013 6.72112 21.3002 7.07022 21.5842 7.49232C21.8682 7.91442 22.0278 8.3954 22.0478 8.88929V8.90829C22.0554 9.35097 21.9506 9.78933 21.7413 10.1895C21.532 10.5897 21.2239 10.941 20.8408 11.2162C20.839 11.2534 20.8363 11.2905 20.8328 11.3276C20.8328 14.946 16.3828 17.6902 11.0338 17.6902C5.70179 17.6902 1.32579 14.9533 1.32879 11.3972C1.32443 11.3427 1.3211 11.2881 1.31879 11.2334C0.672908 10.7946 0.234795 10.1506 0.0927449 9.43106C-0.0493052 8.71152 0.115267 7.97001 0.553297 7.35593C0.991327 6.74186 1.67025 6.30089 2.45325 6.12188C3.23624 5.94288 4.0651 6.03914 4.77279 6.39128C6.3879 5.51032 8.21847 5.00417 10.1018 4.91782ZM19.3878 9.91926C19.7958 9.73553 20.0518 9.35811 20.0488 8.9463C20.0384 8.73922 19.9623 8.53923 19.8296 8.37027C19.6969 8.2013 19.5132 8.07052 19.3005 7.99356C19.0879 7.9166 18.8552 7.89673 18.6304 7.93633C18.4055 7.97592 18.1981 8.0733 18.0328 8.21682L17.4478 8.72366L16.7778 8.31185C15.1628 7.31808 13.3258 6.7506 11.5478 6.7153H10.5418C8.66679 6.74155 6.89079 7.25834 5.30479 8.2313L4.64179 8.63858L4.05779 8.14079C3.93185 8.0338 3.78173 7.95286 3.61781 7.90357C3.45389 7.85428 3.28009 7.83783 3.10845 7.85534C2.93681 7.87286 2.77143 7.92393 2.62375 8.00501C2.47607 8.0861 2.34963 8.19526 2.25317 8.32495C2.15672 8.45463 2.09255 8.60174 2.06513 8.75609C2.0377 8.91044 2.04766 9.06834 2.09433 9.21886C2.14099 9.36938 2.22324 9.50892 2.33538 9.62782C2.44752 9.74673 2.58687 9.84215 2.74379 9.90749L3.37679 10.17L3.32279 10.799C3.30979 10.9529 3.30979 11.1058 3.32579 11.3276C3.32579 13.7803 6.68179 15.8801 11.0338 15.8801C15.4048 15.8801 18.8328 13.7658 18.8358 11.2588C18.8488 11.1057 18.8488 10.952 18.8358 10.799L18.7838 10.1908L19.3878 9.91926ZM5.99979 10.0632C5.99979 9.7031 6.15783 9.35779 6.43913 9.10319C6.72044 8.84859 7.10197 8.70555 7.49979 8.70555C7.89762 8.70555 8.27915 8.84859 8.56045 9.10319C8.84176 9.35779 8.99979 9.7031 8.99979 10.0632C8.99979 10.4232 8.84176 10.7685 8.56045 11.0231C8.27915 11.2777 7.89762 11.4208 7.49979 11.4208C7.10197 11.4208 6.72044 11.2777 6.43913 11.0231C6.15783 10.7685 5.99979 10.4232 5.99979 10.0632ZM12.9998 10.0632C12.9998 9.7031 13.1578 9.35779 13.4391 9.10319C13.7204 8.84859 14.102 8.70555 14.4998 8.70555C14.8976 8.70555 15.2791 8.84859 15.5605 9.10319C15.8418 9.35779 15.9998 9.7031 15.9998 10.0632C15.9998 10.4232 15.8418 10.7685 15.5605 11.0231C15.2791 11.2777 14.8976 11.4208 14.4998 11.4208C14.102 11.4208 13.7204 11.2777 13.4391 11.0231C13.1578 10.7685 12.9998 10.4232 12.9998 10.0632ZM11.0158 14.6818C9.61879 14.6818 8.24879 14.3469 7.13379 13.5866C7.06644 13.513 7.03185 13.4193 7.03679 13.3239C7.04173 13.2284 7.08585 13.138 7.16051 13.0705C7.23517 13.0029 7.33501 12.963 7.44048 12.9585C7.54595 12.954 7.64948 12.9853 7.73079 13.0463C8.67579 13.6735 9.85379 13.9423 10.9998 13.9423C12.1458 13.9423 13.3298 13.6934 14.2838 13.0743C14.339 13.0256 14.4073 12.9909 14.482 12.9737C14.5567 12.9565 14.6351 12.9574 14.7093 12.9763C14.7835 12.9952 14.8508 13.0314 14.9047 13.0814C14.9585 13.1313 14.9968 13.1932 15.0158 13.2608C15.032 13.3285 15.0296 13.3989 15.0089 13.4656C14.9882 13.5323 14.9497 13.5935 14.8968 13.6436C14.2128 14.365 12.4128 14.6818 11.0158 14.6818Z"/>
        </symbol>
        <symbol id="ftr-github-icon-svg" width="20" height="19" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
          <path d="M10 0.654785C4.475 0.654785 1.45954e-06 4.70499 1.45954e-06 9.70552C-0.00113276 11.6055 0.658815 13.4576 1.88622 14.999C3.11362 16.5404 4.84615 17.6929 6.838 18.2929C7.338 18.3716 7.525 18.1001 7.525 17.862C7.525 17.6475 7.512 16.9352 7.512 16.1768C5 16.5958 4.35 15.6229 4.15 15.1133C4.037 14.8527 3.55 14.0499 3.125 13.8345C2.775 13.6652 2.275 13.2462 3.112 13.2353C3.9 13.2235 4.462 13.8915 4.65 14.163C5.55 15.5315 6.988 15.1468 7.562 14.9097C7.65 14.3214 7.912 13.9259 8.2 13.6996C5.975 13.4733 3.65 12.6923 3.65 9.23035C3.65 8.24563 4.037 7.43197 4.675 6.79752C4.575 6.57125 4.225 5.64355 4.775 4.39907C4.775 4.39907 5.612 4.16194 7.525 5.32768C8.33906 5.12319 9.18017 5.02026 10.025 5.02176C10.875 5.02176 11.725 5.12313 12.525 5.32677C14.437 4.15018 15.275 4.39998 15.275 4.39998C15.825 5.64445 15.475 6.57215 15.375 6.79842C16.012 7.43197 16.4 8.23477 16.4 9.23035C16.4 12.704 14.063 13.4733 11.838 13.6996C12.2 13.982 12.513 14.525 12.513 15.374C12.513 16.5841 12.5 17.557 12.5 17.8629C12.5 18.1001 12.688 18.3825 13.188 18.2919C15.173 17.6854 16.8979 16.5307 18.1199 14.9904C19.3419 13.4501 19.9994 11.6018 20 9.70552C20 4.70499 15.525 0.654785 10 0.654785Z"/>
        </symbol>
        <!-- About Us -->
        <symbol id="ser-user-icon-svg" width="145" height="136" viewBox="0 0 145 136" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M81.3845 124.681C70.0085 126.261 60.5554 117.248 49.8419 113.13C37.8393 108.517 19.8253 110.992 14.9114 99.1338C9.85966 86.9428 24.4756 75.5583 29.157 63.2124C32.461 54.4991 33.4001 45.4575 38.2774 37.5121C44.3881 27.5575 49.1798 13.4235 60.7547 11.7381C72.3924 10.0435 79.0435 25.4578 89.8825 29.998C101.696 34.9463 117.507 29.8166 126.24 39.1678C135.299 48.8692 137.32 64.3684 133.97 77.2086C130.763 89.5023 118.535 96.3732 109.091 104.899C100.459 112.692 92.9117 123.079 81.3845 124.681Z"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M81.3845 124.681C70.0085 126.261 60.5554 117.248 49.8419 113.13C37.8393 108.517 19.8253 110.992 14.9114 99.1338C9.85966 86.9428 24.4756 75.5583 29.157 63.2124C32.461 54.4991 33.4001 45.4575 38.2774 37.5121C44.3881 27.5575 49.1798 13.4235 60.7547 11.7381C72.3924 10.0435 79.0435 25.4578 89.8825 29.998C101.696 34.9463 117.507 29.8166 126.24 39.1678C135.299 48.8692 137.32 64.3684 133.97 77.2086C130.763 89.5023 118.535 96.3732 109.091 104.899C100.459 112.692 92.9117 123.079 81.3845 124.681Z" fill="url(#paint0_linear)"/>
          <g clip-path="url(#clip0)">
          <path d="M79.2747 61.2227C81.148 59.5147 82.3333 57.0627 82.3333 54.3333C82.3333 49.188 78.1467 45 73 45C67.8533 45 63.6667 49.188 63.6667 54.3333C63.6667 57.0627 64.852 59.5147 66.7253 61.2227C61.1933 62.2893 57 67.1613 57 73V78.3333C57 79.0707 57.5973 79.6667 58.3333 79.6667H87.6667C88.4027 79.6667 89 79.0707 89 78.3333V73C89 67.1613 84.8067 62.2893 79.2747 61.2227ZM66.3333 54.3333C66.3333 50.6573 69.324 47.6667 73 47.6667C76.676 47.6667 79.6667 50.6573 79.6667 54.3333C79.6667 58.0093 76.676 61 73 61C69.324 61 66.3333 58.0093 66.3333 54.3333ZM86.3333 77H59.6667V73C59.6667 67.8547 63.8533 63.6667 69 63.6667H77C82.1467 63.6667 86.3333 67.8547 86.3333 73V77Z"/>
          <path d="M55.2747 106.556C57.148 104.848 58.3333 102.396 58.3333 99.6667C58.3333 94.5214 54.1467 90.3334 49 90.3334C43.8533 90.3334 39.6667 94.5214 39.6667 99.6667C39.6667 102.396 40.852 104.848 42.7253 106.556C37.1933 107.623 33 112.495 33 118.333V123.667C33 124.404 33.5973 125 34.3333 125H63.6667C64.4027 125 65 124.404 65 123.667V118.333C65 112.495 60.8067 107.623 55.2747 106.556ZM42.3333 99.6667C42.3333 95.9907 45.324 93 49 93C52.676 93 55.6667 95.9907 55.6667 99.6667C55.6667 103.343 52.676 106.333 49 106.333C45.324 106.333 42.3333 103.343 42.3333 99.6667ZM62.3333 122.333H35.6667V118.333C35.6667 113.188 39.8533 109 45 109H53C58.1467 109 62.3333 113.188 62.3333 118.333V122.333Z"/>
          <path d="M103.275 106.556C105.148 104.848 106.333 102.396 106.333 99.6667C106.333 94.5214 102.147 90.3334 97 90.3334C91.8533 90.3334 87.6667 94.5214 87.6667 99.6667C87.6667 102.396 88.852 104.848 90.7253 106.556C85.1933 107.623 81 112.495 81 118.333V123.667C81 124.404 81.5973 125 82.3333 125H111.667C112.403 125 113 124.404 113 123.667V118.333C113 112.495 108.807 107.623 103.275 106.556ZM90.3333 99.6667C90.3333 95.9907 93.324 93 97 93C100.676 93 103.667 95.9907 103.667 99.6667C103.667 103.343 100.676 106.333 97 106.333C93.324 106.333 90.3333 103.343 90.3333 99.6667ZM110.333 122.333H83.6667V118.333C83.6667 113.188 87.8533 109 93 109H101C106.147 109 110.333 113.188 110.333 118.333V122.333Z"/>
          <path d="M41.0253 87.624L38.3613 87.728C38.3973 88.6467 38.4707 89.5774 38.58 90.492L41.228 90.1747C41.1267 89.3307 41.0587 88.472 41.0253 87.624Z"/>
          <path d="M38.5787 82.1959C38.4707 83.1053 38.396 84.0346 38.3613 84.9586L41.0253 85.0626C41.0587 84.2093 41.1267 83.3519 41.2267 82.5106L38.5787 82.1959Z"/>
          <path d="M51.9855 58.7574C51.2561 59.3134 50.5375 59.9081 49.8481 60.5268L51.6308 62.5108C52.2655 61.9401 52.9281 61.3908 53.6015 60.8788L51.9855 58.7574Z"/>
          <path d="M41.623 71.5734C41.231 72.4067 40.8683 73.2654 40.543 74.1307L43.039 75.068C43.339 74.2707 43.6736 73.4787 44.035 72.712L41.623 71.5734Z"/>
          <path d="M39.6706 76.764C39.4173 77.6454 39.1973 78.5534 39.0146 79.4574L41.6293 79.984C41.7973 79.1507 42 78.3134 42.2346 77.4987L39.6706 76.764Z"/>
          <path d="M47.8627 62.4626C47.224 63.1346 46.6107 63.8347 46.0347 64.5453L48.108 66.2227C48.6387 65.5667 49.2067 64.9187 49.796 64.2987L47.8627 62.4626Z"/>
          <path d="M56.6439 55.7614C55.8373 56.192 55.0333 56.6654 54.252 57.168L55.6973 59.4107C56.4173 58.9454 57.1586 58.5094 57.8999 58.1134L56.6439 55.7614Z"/>
          <path d="M44.379 66.7667C43.8576 67.5281 43.3616 68.3174 42.9043 69.1161L45.2176 70.4414C45.639 69.7054 46.0976 68.9761 46.579 68.2747L44.379 66.7667Z"/>
          <path d="M66.6824 117.709L66.1558 120.324C67.0531 120.505 67.9758 120.651 68.8971 120.759L69.2064 118.111C68.3598 118.011 67.5091 117.876 66.6824 117.709Z"/>
          <path d="M79.401 117.693C78.573 117.861 77.7237 117.999 76.873 118.103L77.1944 120.751C78.1144 120.639 79.0344 120.489 79.9304 120.308L79.401 117.693Z"/>
          <path d="M74.324 118.307C73.472 118.34 72.6107 118.344 71.764 118.311L71.6587 120.975C72.1027 120.993 72.5507 121.001 73.004 121.001C73.4814 120.999 73.9574 120.989 74.4307 120.971L74.324 118.307Z"/>
          <path d="M96.1573 60.5374L94.376 62.5214C95.0106 63.092 95.6266 63.692 96.2093 64.3054L98.1453 62.472C97.5133 61.8054 96.8453 61.1547 96.1573 60.5374Z"/>
          <path d="M99.9708 64.5533L97.8975 66.2307C98.4295 66.888 98.9441 67.58 99.4268 68.284L101.625 66.776C101.103 66.0147 100.547 65.2667 99.9708 64.5533Z"/>
          <path d="M107.639 84.9626L104.975 85.0666C104.992 85.4866 105 85.9106 105 86.3333C105 86.7666 104.992 87.1973 104.975 87.628L107.639 87.732C107.657 87.268 107.667 86.8013 107.667 86.3306C107.667 85.8733 107.657 85.416 107.639 84.9626Z"/>
          <path d="M103.101 69.1227L100.787 70.4493C101.209 71.1867 101.607 71.9507 101.969 72.7187L104.381 71.58C103.989 70.748 103.559 69.9213 103.101 69.1227Z"/>
          <path d="M105.46 74.136L102.964 75.0747C103.263 75.8693 103.532 76.6867 103.767 77.5027L106.331 76.768C106.077 75.8827 105.784 74.9973 105.46 74.136Z"/>
          <path d="M106.984 79.4626L104.371 79.988C104.539 80.8226 104.675 81.6733 104.773 82.516L107.421 82.2013C107.313 81.2893 107.167 80.368 106.984 79.4626Z"/>
          <path d="M91.756 57.1733L90.312 59.416C91.024 59.8747 91.728 60.3693 92.4067 60.888L94.0253 58.7667C93.2907 58.2053 92.528 57.6707 91.756 57.1733Z"/>
          <path d="M86.8717 54.5547L85.8037 56.9974C86.581 57.3374 87.3544 57.7134 88.105 58.116L89.3664 55.7667C88.5544 55.3294 87.7144 54.9214 86.8717 54.5547Z"/>
          </g>
          <defs>
          <linearGradient id="paint0_linear" x1="72.9209" y1="128.242" x2="114.421" y2="35.2417" gradientUnits="userSpaceOnUse">
          <stop stop-color="white"/>
          <stop offset="1" stop-color="white" stop-opacity="0"/>
          </linearGradient>
          <clipPath id="clip0">
          <rect x="33" y="45" width="80" height="80"/>
          </clipPath>
          </defs>
        </symbol>





  </svg> 

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php $class = wrapper_class(); ?>
<div class="fullpage <?php echo $class; ?>">
  <?php if(is_page_template( 'page-about-token.php' ) OR is_page_template( 'page-wallet.php' ) OR is_page_template( 'page-exchange.php' )): ?>
  <div class="wdTopBg">
    <svg class="desktopSVG hide-xs" preserveAspectRatio="none" width="1920" height="1463" viewBox="0 0 1920 1463" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="1920" y="882" width="1920" height="882" transform="rotate(180 1920 882)" fill="url(#paint0_linearwd)"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M-208.585 -389.51C-112.137 -476.246 -44.5273 -598.522 75.0346 -648.768C192.994 -698.34 325.932 -658.316 453.505 -667.752C589.363 -677.801 721.171 -730.643 855.214 -706.476C1004.41 -679.578 1152.34 -623.611 1264.4 -521.554C1381.58 -414.841 1532.51 -272.649 1502.6 -116.908C1467.43 66.254 1193.77 106.172 1111.71 273.684C1055.62 388.177 1196.32 544.344 1126.42 650.974C1058.35 754.825 886.157 711.471 781.217 777.839C660.916 853.922 604.108 1011.38 472.168 1064.75C329.006 1122.66 146.996 1168.22 15.3728 1087.62C-120.13 1004.65 -91.8229 790.176 -185.645 661.936C-273.221 542.232 -446.483 500.615 -511.596 367.337C-578.978 229.417 -608.042 56.778 -550.957 -85.8077C-493.538 -229.226 -323.456 -286.205 -208.585 -389.51Z" fill="#141C28"/>
    <defs>
    <linearGradient id="paint0_linearwd" x1="2363.01" y1="956.05" x2="2227.91" y2="2074.34" gradientUnits="userSpaceOnUse">
    <stop stop-color="#141C28"/>
    <stop offset="0.572917" stop-color="#072C10"/>
    <stop offset="1" stop-color="#141C28"/>
    </linearGradient>
    </defs>
    </svg>
    <svg class="mobileSVG show-xs" preserveAspectRatio="none" width="375" height="1900" viewBox="0 0 375 1900" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="375" y="1144" width="375" height="1144" transform="rotate(180 375 1144)" fill="url(#paint0_linearwdmt)"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M-1195.58 47.4906C-1099.14 -39.2453 -1031.53 -161.522 -911.964 -211.767C-794.004 -261.34 -661.066 -221.315 -533.493 -230.751C-397.635 -240.8 -265.827 -293.642 -131.784 -269.476C17.4083 -242.578 165.34 -186.61 277.406 -84.5532C394.583 22.1592 545.507 164.352 515.603 320.092C480.433 503.255 206.771 543.173 124.709 710.684C68.6195 825.178 209.324 981.345 139.425 1087.97C71.3469 1191.83 -100.841 1148.47 -205.781 1214.84C-326.082 1290.92 -382.891 1448.38 -514.831 1501.75C-657.992 1559.66 -840.002 1605.22 -971.625 1524.62C-1107.13 1441.65 -1078.82 1227.18 -1172.64 1098.94C-1260.22 979.233 -1433.48 937.615 -1498.59 804.338C-1565.98 666.417 -1595.04 493.779 -1537.96 351.193C-1480.54 207.775 -1310.45 150.796 -1195.58 47.4906Z" fill="#141C28"/>
    <defs>
    <linearGradient id="paint0_linearwdmt" x1="461.525" y1="1240.05" x2="-256.798" y2="2135.39" gradientUnits="userSpaceOnUse">
    <stop stop-color="#141C28"/>
    <stop offset="0.572917" stop-color="#072C10"/>
    <stop offset="1" stop-color="#141C28"/>
    </linearGradient>
    </defs>
    </svg>    
  </div>
  <div class="wdBottomBg">
    <svg class="desktopSVG hide-xs" preserveAspectRatio="none" width="1426" height="1254" viewBox="0 0 1426 1254" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M691.715 1182.88C602.853 1165.17 506.156 1178.45 428.052 1132.54C350.994 1087.25 317.817 996.123 259.202 928.673C196.781 856.842 112.104 805.168 69.5905 720.048C22.2718 625.309 -8.25132 519.122 2.01343 413.739C12.7465 303.548 29.2278 159.639 128.889 111.265C246.098 54.3741 382.846 190.839 510.9 166.734C598.424 150.258 626.999 6.22599 715.895 0.766505C802.476 -4.55074 850.199 109.938 931.213 140.921C1024.09 176.439 1135.96 142.404 1220.98 193.931C1313.24 249.841 1414.83 332.653 1424.75 440.011C1434.97 550.533 1303.1 624.354 1270.56 730.474C1240.18 829.529 1289.32 943.893 1241.96 1036.05C1192.94 1131.42 1108.48 1219.86 1004.81 1247.52C900.546 1275.35 797.552 1203.98 691.715 1182.88Z" fill="#141C28"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M691.715 1182.88C602.853 1165.17 506.156 1178.45 428.052 1132.54C350.994 1087.25 317.817 996.123 259.202 928.673C196.781 856.842 112.104 805.168 69.5905 720.048C22.2718 625.309 -8.25132 519.122 2.01343 413.739C12.7465 303.548 29.2278 159.639 128.889 111.265C246.098 54.3741 382.846 190.839 510.9 166.734C598.424 150.258 626.999 6.22599 715.895 0.766505C802.476 -4.55074 850.199 109.938 931.213 140.921C1024.09 176.439 1135.96 142.404 1220.98 193.931C1313.24 249.841 1414.83 332.653 1424.75 440.011C1434.97 550.533 1303.1 624.354 1270.56 730.474C1240.18 829.529 1289.32 943.893 1241.96 1036.05C1192.94 1131.42 1108.48 1219.86 1004.81 1247.52C900.546 1275.35 797.552 1203.98 691.715 1182.88Z" fill="url(#paint0_linearwdb)"/>
    <defs>
    <linearGradient id="paint0_linearwdb" x1="1348.83" y1="979.29" x2="378.195" y2="136.529" gradientUnits="userSpaceOnUse">
    <stop stop-color="#141C28"/>
    <stop offset="0.991797" stop-color="#0D1522"/>
    </linearGradient>
    </defs>
    </svg>
  </div> 
  <?php else: ?>
  <div class="homeTopBg">
    <svg class="desktopSVG hide-xs" preserveAspectRatio="none" width="1920" height="1463" viewBox="0 0 1920 1463" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="1920.01" y="870.044" width="1920" height="870" transform="rotate(180 1920.01 870.044)" fill="#F5F6F8"/>
    <rect x="1920.01" y="870.044" width="1920" height="870" transform="rotate(180 1920.01 870.044)" fill="url(#homeTopBg1)"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M-207.996 -390.25C-111.446 -476.872 -43.6913 -599.068 75.9299 -649.172C193.948 -698.605 326.839 -658.423 454.423 -667.709C590.292 -677.597 722.163 -730.284 856.177 -705.958C1005.34 -678.884 1153.2 -622.742 1265.15 -520.553C1382.2 -413.702 1532.95 -271.331 1502.87 -115.626C1467.48 67.4947 1193.77 107.089 1111.51 274.504C1055.29 388.931 1195.81 545.264 1125.78 651.811C1057.58 755.582 885.444 712.024 780.426 778.268C660.035 854.209 603.04 1011.6 471.037 1064.81C327.807 1122.55 145.744 1167.9 14.2158 1087.15C-121.188 1004.01 -92.6282 789.573 -186.299 661.222C-273.734 541.415 -446.946 499.593 -511.902 366.239C-579.12 228.239 -607.981 55.5657 -550.726 -86.9524C-493.138 -230.302 -322.989 -287.081 -207.996 -390.25Z" fill="#F5F6F8"/>
    <rect x="-1" width="1921" height="312" fill="url(#homeTopBg2)"/>
    <defs>
    <linearGradient id="homeTopBg1" x1="2880.01" y1="987.044" x2="2880.01" y2="1205.04" gradientUnits="userSpaceOnUse">
    <stop stop-color="white"/>
    <stop offset="1" stop-color="white" stop-opacity="0"/>
    </linearGradient>
    <linearGradient id="homeTopBg2" x1="1228" y1="18" x2="1219.6" y2="335.336" gradientUnits="userSpaceOnUse">
    <stop stop-color="white" stop-opacity="0.32"/>
    <stop offset="1" stop-color="white" stop-opacity="0"/>
    </linearGradient>
    </defs>
    </svg>
    <svg class="mobileSVG show-xs" preserveAspectRatio="none" width="375" height="1860" viewBox="0 0 375 1860" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="375" y="1104" width="375" height="1144" transform="rotate(180 375 1104)" fill="#F5F6F8"/>
    <rect x="375" y="1104" width="375" height="1144" transform="rotate(180 375 1104)" fill="url(#paint0_linearMbg)"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M-991.583 7.49056C-895.136 -79.2453 -827.525 -201.522 -707.964 -251.767C-590.004 -301.34 -457.066 -261.315 -329.493 -270.751C-193.635 -280.8 -61.8269 -333.642 72.216 -309.476C221.408 -282.578 369.34 -226.61 481.406 -124.553C598.583 -17.8408 749.507 124.352 719.603 280.092C684.433 463.255 410.771 503.173 328.709 670.684C272.62 785.178 413.324 941.345 343.425 1047.97C275.347 1151.83 103.159 1108.47 -1.78116 1174.84C-122.082 1250.92 -178.891 1408.38 -310.831 1461.75C-453.992 1519.66 -636.002 1565.22 -767.625 1484.62C-903.128 1401.65 -874.821 1187.18 -968.643 1058.94C-1056.22 939.233 -1229.48 897.615 -1294.59 764.338C-1361.98 626.417 -1391.04 453.779 -1333.96 311.193C-1276.54 167.775 -1106.45 110.796 -991.583 7.49056Z" fill="#F5F6F8"/>
    <defs>
    <linearGradient id="paint0_linearMbg" x1="562.5" y1="1257.85" x2="562.499" y2="1544.51" gradientUnits="userSpaceOnUse">
    <stop stop-color="white"/>
    <stop offset="1" stop-color="white" stop-opacity="0"/>
    </linearGradient>
    </defs>
    </svg>

  </div>
  <div class="middleBg">
    <svg class="desktopSVG hide-xs" xmlns="http://www.w3.org/2000/svg" width="1416" height="1245" viewBox="0 0 1416 1245" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M686.964 1174.21C598.704 1156.62 502.674 1169.81 425.104 1124.22C348.574 1079.24 315.624 988.729 257.404 921.739C195.414 850.399 111.314 799.079 69.0943 714.539C22.0943 620.449 -8.21968 514.989 1.97433 410.319C12.6343 300.889 29.0033 157.959 127.984 109.919C244.394 53.4186 380.204 188.949 507.384 165.009C594.304 148.649 622.684 5.59865 710.974 0.178653C796.964 -5.11135 844.364 108.599 924.824 139.369C1017.06 174.649 1128.16 140.839 1212.61 192.019C1304.24 247.549 1405.13 329.789 1414.98 436.419C1425.13 546.179 1294.17 619.498 1261.84 724.888C1231.67 823.268 1280.48 936.849 1233.44 1028.38C1184.76 1123.1 1100.87 1210.94 997.924 1238.41C894.364 1266.04 792.074 1195.17 686.964 1174.21Z" fill="#F5F6F8"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M686.964 1174.21C598.704 1156.62 502.674 1169.81 425.104 1124.22C348.574 1079.24 315.624 988.729 257.404 921.739C195.414 850.399 111.314 799.079 69.0943 714.539C22.0943 620.449 -8.21968 514.989 1.97433 410.319C12.6343 300.889 29.0033 157.959 127.984 109.919C244.394 53.4186 380.204 188.949 507.384 165.009C594.304 148.649 622.684 5.59865 710.974 0.178653C796.964 -5.11135 844.364 108.599 924.824 139.369C1017.06 174.649 1128.16 140.839 1212.61 192.019C1304.24 247.549 1405.13 329.789 1414.98 436.419C1425.13 546.179 1294.17 619.498 1261.84 724.888C1231.67 823.268 1280.48 936.849 1233.44 1028.38C1184.76 1123.1 1100.87 1210.94 997.924 1238.41C894.364 1266.04 792.074 1195.17 686.964 1174.21Z" fill="url(#paint0_linear1a)"/>
    <defs>
    <linearGradient id="paint0_linear1a" x1="691.594" y1="1239.51" x2="716.944" y2="-0.0213032" gradientUnits="userSpaceOnUse">
    <stop stop-color="white"/>
    <stop offset="1" stop-color="white" stop-opacity="0"/>
    </linearGradient>
    </defs>
    </svg>
    <svg class="mobileSVG show-xs" preserveAspectRatio="none" width="375" height="1269" viewBox="0 0 375 1269" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M-337.123 1188.7C-425.378 1171.11 -521.413 1184.3 -598.984 1138.71C-675.514 1093.73 -708.465 1003.22 -766.679 936.229C-828.673 864.889 -912.771 813.568 -954.994 729.031C-1001.99 634.939 -1032.3 529.478 -1022.11 424.815C-1011.45 315.378 -995.081 172.452 -896.102 124.409C-779.694 67.9072 -643.881 203.439 -516.702 179.499C-429.776 163.136 -401.397 20.0882 -313.108 14.6661C-227.119 9.3852 -179.722 123.091 -99.2619 153.862C-7.02427 189.137 104.081 155.335 188.527 206.51C280.156 262.038 381.052 344.284 390.904 450.908C401.047 560.674 270.087 633.991 237.764 739.385C207.593 837.763 256.401 951.345 209.358 1042.87C160.677 1137.59 76.7891 1225.43 -26.1648 1252.9C-129.72 1280.53 -232.009 1209.66 -337.123 1188.7Z" fill="#F5F6F8"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M-337.123 1188.7C-425.378 1171.11 -521.413 1184.3 -598.984 1138.71C-675.514 1093.73 -708.465 1003.22 -766.679 936.229C-828.673 864.889 -912.771 813.568 -954.994 729.031C-1001.99 634.939 -1032.3 529.478 -1022.11 424.815C-1011.45 315.378 -995.081 172.452 -896.102 124.409C-779.694 67.9072 -643.881 203.439 -516.702 179.499C-429.776 163.136 -401.397 20.0882 -313.108 14.6661C-227.119 9.3852 -179.722 123.091 -99.2619 153.862C-7.02427 189.137 104.081 155.335 188.527 206.51C280.156 262.038 381.052 344.284 390.904 450.908C401.047 560.674 270.087 633.991 237.764 739.385C207.593 837.763 256.401 951.345 209.358 1042.87C160.677 1137.59 76.7891 1225.43 -26.1648 1252.9C-129.72 1280.53 -232.009 1209.66 -337.123 1188.7Z" fill="url(#mobileSVG)"/>
    <defs>
    <linearGradient id="mobileSVG" x1="-332.493" y1="1254" x2="-307.138" y2="14.4726" gradientUnits="userSpaceOnUse">
    <stop stop-color="white"/>
    <stop offset="1" stop-color="white" stop-opacity="0"/>
    </linearGradient>
    </defs>
    </svg>
  </div>
  <div class="bottomBg">
    <svg class="desktopSVG hide-xs" preserveAspectRatio="none" width="1920" height="1231" viewBox="0 0 1920 1231" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2873 403.536C57.0879 361.612 31.1881 304.197 138.226 278.338C243.83 252.825 451.139 267.788 606.026 260.335C770.971 252.398 891.321 225.052 1085.44 232.759C1301.51 241.336 1542.72 263.197 1780.39 306.956C2028.89 352.711 2353.34 413.807 2458.4 485.546C2581.96 569.917 2267.82 594.874 2316.84 673.268C2350.35 726.85 2674.56 794.57 2683.11 844.907C2691.45 893.934 2430.75 878.422 2357.3 911.271C2273.11 948.927 2345.25 1022.11 2225.22 1049.7C2094.98 1079.64 1903.56 1104.91 1660.57 1071.41C1410.43 1036.93 1249.24 938.459 1010.86 882.313C788.344 829.904 527.865 815.211 321.656 756.059C108.264 694.847 -87.9665 616.861 -146.061 550.447C-204.496 483.646 -38.8804 453.469 13.2873 403.536Z" fill="#F5F6F8"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2873 403.536C57.0879 361.612 31.1881 304.197 138.226 278.338C243.83 252.825 451.139 267.788 606.026 260.335C770.971 252.398 891.321 225.052 1085.44 232.759C1301.51 241.336 1542.72 263.197 1780.39 306.956C2028.89 352.711 2353.34 413.807 2458.4 485.546C2581.96 569.917 2267.82 594.874 2316.84 673.268C2350.35 726.85 2674.56 794.57 2683.11 844.907C2691.45 893.934 2430.75 878.422 2357.3 911.271C2273.11 948.927 2345.25 1022.11 2225.22 1049.7C2094.98 1079.64 1903.56 1104.91 1660.57 1071.41C1410.43 1036.93 1249.24 938.459 1010.86 882.313C788.344 829.904 527.865 815.211 321.656 756.059C108.264 694.847 -87.9665 616.861 -146.061 550.447C-204.496 483.646 -38.8804 453.469 13.2873 403.536Z" fill="url(#paint0_linearaB)"/>
    <defs>
    <linearGradient id="paint0_linearaB" x1="-135.451" y1="382.257" x2="2683.3" y2="848.248" gradientUnits="userSpaceOnUse">
    <stop stop-color="white"/>
    <stop offset="1" stop-color="white" stop-opacity="0"/>
    </linearGradient>
    </defs>
    </svg>
  </div>
  <?php endif; ?>
</div> 
<div class="hb-bg-particales innerPageParticles" id="hbbgparticales"></div>
<?php
  $logoObj = get_field('logo_header', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?>
<div class="pageElements">
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="hdr-top-inr clearfix">
            <div class="logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <nav class="main-nav hide-sm clearfix">
              <?php 
                $tmenuOptions = array( 
                    'theme_location' => 'cbv_top_menu', 
                    'menu_class' => 'clearfix ulc',
                    'container' => 'tmnav',
                    'container_class' => 'tmainnav'
                  );
                wp_nav_menu( $tmenuOptions ); 
              ?>
            </nav>
          </div>
        </div>
      </div>
  </div>
  <div class="header-btm hide-sm">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="hdr-btm-inr">
            <div class="hdr-btm-menu">
              <?php 
                $menuOptions = array( 
                    'theme_location' => 'cbv_main_menu', 
                    'menu_class' => 'clearfix ulc',
                    'container' => 'mnav',
                    'container_class' => 'mainnav'
                  );
                wp_nav_menu( $menuOptions ); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header><!-- end of header -->