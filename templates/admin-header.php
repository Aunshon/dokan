<div class="dokan-admin-header">
    <div class="dokan-admin-header-logo">
        <img src="<?php echo DOKAN_PLUGIN_ASSEST . '/images/dokan-logo.png'; ?>" alt="Dokan Logo" />
        <span class="dokan-admin-header-version">v<?php echo DOKAN_PLUGIN_VERSION ?></span>
    </div>

    <div class="dokan-admin-header-menu">
        <div class="menu-item">
            <div class="menu-icon">
                <?php if ( $has_new_version ) : ?>
                    <span class="whats-new-pointer"></span>
                <?php endif; ?>
                <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.02848 9.79785H3.58452C3.47603 9.79785 3.38094 9.83883 3.29948 9.92015C3.21794 10.0017 3.17725 10.0966 3.17725 10.2053V12.6493C3.17725 12.758 3.21808 12.8531 3.29948 12.9344C3.38094 13.0157 3.47592 13.0566 3.58452 13.0566H6.02848C6.13697 13.0566 6.23231 13.0158 6.31345 12.9344C6.39513 12.8531 6.4359 12.758 6.4359 12.6493V10.2053C6.4359 10.0966 6.39524 10.0017 6.31345 9.92015C6.23231 9.83862 6.13697 9.79785 6.02848 9.79785Z" fill="#A3A3A3"/>
                    <path d="M9.23633 2.48171C8.95792 1.9689 8.59822 1.53633 8.15685 1.18323C7.71576 0.830275 7.21985 0.548402 6.67008 0.33804C6.12021 0.127749 5.57376 0.0224609 5.03056 0.0224609C2.96692 0.0224609 1.39199 0.925363 0.305722 2.7312C0.251473 2.81941 0.232748 2.91442 0.24969 3.01629C0.266738 3.11801 0.319347 3.20289 0.407586 3.27077L2.07764 4.54375C2.16588 4.59796 2.25077 4.6251 2.33227 4.6251C2.4545 4.6251 2.55964 4.57071 2.64799 4.4621C3.13669 3.85121 3.49996 3.46087 3.73753 3.29106C4.0295 3.09425 4.39598 2.99588 4.83724 2.99588C5.25133 2.99588 5.61613 3.10452 5.93192 3.32159C6.24757 3.53887 6.40526 3.79007 6.40526 4.07519C6.40526 4.39412 6.32055 4.65221 6.15078 4.84909C5.98111 5.0459 5.69588 5.23589 5.29527 5.41926C4.76591 5.65683 4.28031 6.02516 3.83925 6.52414C3.39788 7.02315 3.17735 7.55437 3.17735 8.1178V8.576C3.17735 8.70512 3.2128 8.83234 3.28421 8.95792C3.35554 9.08361 3.44203 9.14635 3.54393 9.14635H5.98785C6.09649 9.14635 6.19144 9.09385 6.27297 8.98828C6.35425 8.88335 6.39516 8.77299 6.39516 8.65775C6.39516 8.48809 6.4885 8.26043 6.67504 7.97545C6.86175 7.69033 7.09419 7.46948 7.37275 7.3133C7.63736 7.164 7.84423 7.04366 7.99374 6.95189C8.1434 6.86037 8.33843 6.71239 8.5795 6.50887C8.82046 6.30514 9.00718 6.10316 9.13939 5.90297C9.27182 5.70273 9.3907 5.44301 9.49592 5.12386C9.60135 4.80483 9.65385 4.46196 9.65385 4.09542C9.65378 3.53195 9.5145 2.99399 9.23633 2.48171Z" fill="#A3A3A3"/>
                </svg>

                <div class="dropdown">
                    <h3><?php esc_html_e( 'Get Help', 'dokan-lite' ); ?></h3>
                    <div class="list-item">
                        <a href="<?php echo esc_url( add_query_arg( array( 'page' => 'dokan#/changelog' ), admin_url( 'admin.php' ) ) ); ?>" class="<?php echo $has_new_version ? 'active' : ''; ?>">
                            <div class="dokan-icon">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.71436 0.711914H10.0109V3.48072H7.71436V0.711914Z" fill="#A3A3A3"/>
                                    <path d="M7.71436 4.54639H10.0109V5.96681H7.71436V4.54639Z" fill="#A3A3A3"/>
                                    <path d="M1.75586 4.54639V9.62903C2.08621 9.6916 2.39906 9.85765 2.64315 10.1226L4.40243 12.0322C4.40693 12.0371 4.41174 12.0417 4.41634 12.0465V11.6579C4.41634 10.8407 5.08117 10.1759 5.89833 10.1759H8.36191C8.66779 10.2105 9.47773 9.74711 9.75702 9.63607C10.9428 9.08481 12.2924 9.1066 13.4597 9.69582L14.1696 10.0564C14.3685 9.41801 14.9392 8.95551 15.6108 8.95551H16.0318V4.54639H11.0772V6.49965C11.0772 6.79394 10.8386 7.0325 10.5443 7.0325H7.18205C6.88776 7.0325 6.6492 6.79394 6.6492 6.49965V4.54639H1.75586Z" fill="#A3A3A3"/>
                                    <path d="M11.0771 3.48072H16.0318V1.451C16.0318 1.0428 15.7568 0.711914 15.4176 0.711914H11.0771V3.48072Z" fill="#A3A3A3"/>
                                    <path d="M15.6111 10.021C15.3624 10.021 15.1602 10.2597 15.1602 10.5531V15.3163C15.1602 15.6096 15.3625 15.8483 15.6111 15.8483H16.4528C16.7014 15.8483 16.9037 15.6096 16.9037 15.3163V10.5531C16.9037 10.2597 16.7014 10.021 16.4528 10.021H15.6111Z" fill="#A3A3A3"/>
                                    <path d="M6.64923 0.711914H2.26626C1.98439 0.711914 1.75586 0.986916 1.75586 1.32614V3.48072H6.64923V0.711914Z" fill="#A3A3A3"/>
                                    <path d="M1.85926 10.8444C1.38846 10.3736 0.587016 10.989 1.03485 11.5366L3.43489 14.4461C4.24968 15.4339 5.45135 16.0004 6.73179 16.0004H9.44637C10.4545 16.0004 11.4628 15.882 12.4434 15.6485L14.0941 15.2537V11.2131L12.9782 10.6463C12.1051 10.2056 11.0942 10.1893 10.2062 10.6021L9.2571 11.0434C8.97856 11.1729 8.66896 11.2413 8.3618 11.2413H5.89822C5.66866 11.2413 5.48189 11.4281 5.48189 11.6577V12.4648H10.2672C10.5615 12.4648 10.8001 12.7034 10.8001 12.9977C10.8001 13.292 10.5615 13.5305 10.2672 13.5305H5.38972C4.77152 13.538 4.06137 13.2484 3.61854 12.754L1.85926 10.8444Z" fill="#A3A3A3"/>
                                </svg>
                            </div>

                            <?php esc_html_e( 'What’s New', 'dokan-lite' ); ?>
                        </a>
                        <a href="https://wedevs.com/account/tickets/?utm_source=plugin&utm_medium=wp-admin&utm_campaign=dokan-lite" target="_blank">
                            <span class="dokan-icon">
                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.15332 6.91895C3.37788 6.91895 2.74707 7.54976 2.74707 8.3252V12.1377C2.74707 12.9131 3.37788 13.5439 4.15332 13.5439C4.92876 13.5439 5.55957 12.9131 5.55957 12.1377V8.3252C5.55957 7.54976 4.92876 6.91895 4.15332 6.91895Z" fill="#A3A3A3"/>
                                    <path d="M1.80957 8.32548C1.80957 8.19026 1.82741 8.05963 1.84951 7.93066C1.28457 8.11326 0.87207 8.63801 0.87207 9.26298V11.2005C0.87207 11.8254 1.28457 12.3502 1.84951 12.5328C1.82741 12.4038 1.80957 12.2732 1.80957 12.138V8.32548Z" fill="#A3A3A3"/>
                                    <path d="M11.6533 6.91895C10.8779 6.91895 10.2471 7.54976 10.2471 8.3252V12.1377C10.2471 12.9131 10.8779 13.5439 11.6533 13.5439C11.7943 13.5439 11.9278 13.5168 12.0562 13.4781C11.8817 14.0565 11.3504 14.4814 10.7158 14.4814H9.22323C9.02907 13.937 8.51363 13.5439 7.90332 13.5439C7.12788 13.5439 6.49707 14.1748 6.49707 14.9502C6.49707 15.7256 7.12788 16.3564 7.90332 16.3564C8.51363 16.3564 9.02907 15.9634 9.22323 15.4189H10.7158C12.0081 15.4189 13.0596 14.3675 13.0596 13.0752V12.1377V8.3252C13.0596 7.54976 12.4288 6.91895 11.6533 6.91895Z" fill="#A3A3A3"/>
                                    <path d="M13.957 7.93066C13.9791 8.05963 13.997 8.19026 13.997 8.32548V12.138C13.997 12.2732 13.9791 12.4038 13.957 12.5328C14.522 12.3502 14.9345 11.8254 14.9345 11.2005V9.26298C14.9345 8.63801 14.522 8.11326 13.957 7.93066Z" fill="#A3A3A3"/>
                                    <path d="M7.90332 0.356445C4.02607 0.356445 0.87207 3.51045 0.87207 7.3877V7.39966C1.15135 7.18823 1.47448 7.03351 1.83104 6.96423C2.05013 3.80179 4.68626 1.29395 7.90332 1.29395C11.1204 1.29395 13.7565 3.80179 13.9756 6.9642C14.3321 7.03348 14.6553 7.18823 14.9346 7.39963V7.3877C14.9346 3.51045 11.7806 0.356445 7.90332 0.356445Z" fill="#A3A3A3"/>
                                </svg>
                            </span>

                            <?php esc_html_e( 'Get Support', 'dokan-lite' ); ?>
                        </a>
                        <a href="https://www.facebook.com/groups/dokanMultivendor" target="_blank">
                            <div class="dokan-icon">
                                <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.90377 0.714267L6.82893 0.710938C4.49791 0.710938 2.99151 2.25646 2.99151 4.64856V6.46407H0.90535C0.725081 6.46407 0.579102 6.61021 0.579102 6.79048V9.42094C0.579102 9.60121 0.725248 9.74719 0.90535 9.74719H2.99151V16.3847C2.99151 16.565 3.13749 16.7109 3.31776 16.7109H6.03961C6.21987 16.7109 6.36585 16.5648 6.36585 16.3847V9.74719H8.80506C8.98533 9.74719 9.13131 9.60121 9.13131 9.42094L9.13231 6.79048C9.13231 6.70393 9.09785 6.62103 9.03677 6.55978C8.97568 6.49852 8.89245 6.46407 8.80589 6.46407H6.36585V4.92504C6.36585 4.18532 6.54213 3.8098 7.50573 3.8098L8.90344 3.8093C9.08354 3.8093 9.22952 3.66315 9.22952 3.48305V1.04052C9.22952 0.860579 9.0837 0.714599 8.90377 0.714267Z" fill="#A3A3A3"/>
                                </svg>
                            </div>
                            <?php esc_html_e( 'Community', 'dokan-lite' ); ?>
                        </a>
                        <a href="https://wedevs.com/docs/dokan/getting-started/?utm_source=plugin&utm_medium=wp-admin&utm_campaign=dokan-lite" target="_blank">
                            <div class="dokan-icon">
                                <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.21582 16.7109H11.5908C12.3663 16.7109 12.9971 16.0801 12.9971 15.3047V5.39844H9.71582C8.94038 5.39844 8.30957 4.76762 8.30957 3.99219V0.710938H2.21582C1.44038 0.710938 0.80957 1.34175 0.80957 2.11719V15.3047C0.80957 16.0801 1.44038 16.7109 2.21582 16.7109ZM4.09082 7.30469H9.71582C9.97491 7.30469 10.1846 7.51434 10.1846 7.77344C10.1846 8.03253 9.97491 8.24219 9.71582 8.24219H4.09082C3.83173 8.24219 3.62207 8.03253 3.62207 7.77344C3.62207 7.51434 3.83173 7.30469 4.09082 7.30469ZM4.09082 9.17969H9.71582C9.97491 9.17969 10.1846 9.38934 10.1846 9.64844C10.1846 9.90753 9.97491 10.1172 9.71582 10.1172H4.09082C3.83173 10.1172 3.62207 9.90753 3.62207 9.64844C3.62207 9.38934 3.83173 9.17969 4.09082 9.17969ZM4.09082 11.0547H9.71582C9.97491 11.0547 10.1846 11.2643 10.1846 11.5234C10.1846 11.7825 9.97491 11.9922 9.71582 11.9922H4.09082C3.83173 11.9922 3.62207 11.7825 3.62207 11.5234C3.62207 11.2643 3.83173 11.0547 4.09082 11.0547ZM4.09082 12.9297H7.84082C8.09991 12.9297 8.30957 13.1393 8.30957 13.3984C8.30957 13.6575 8.09991 13.8672 7.84082 13.8672H4.09082C3.83173 13.8672 3.62207 13.6575 3.62207 13.3984C3.62207 13.1393 3.83173 12.9297 4.09082 12.9297Z" fill="#A3A3A3"/>
                                </svg>
                            </div>
                            <?php esc_html_e( 'Documentation', 'dokan-lite' ); ?>
                        </a>
                        <a href="https://wedevs.com/dokan/faq" target="_blank">
                            <div class="dokan-icon">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9035 11.1843C16.9035 9.19884 15.7645 7.42688 14.0586 6.56494C14.0056 10.3718 10.9192 13.4582 7.1123 13.5112C7.97424 15.2171 9.7462 16.3562 11.7317 16.3562C12.6626 16.3562 13.5678 16.1082 14.3632 15.6372L16.8809 16.3336L16.1845 13.8159C16.6556 13.0205 16.9035 12.1152 16.9035 11.1843Z" fill="#A3A3A3"/>
                                    <path d="M13.122 6.46579C13.122 3.09703 10.3814 0.356445 7.01267 0.356445C3.64391 0.356445 0.90332 3.09703 0.90332 6.46579C0.90332 7.56369 1.19556 8.63265 1.75048 9.57113L0.925781 12.5526L3.90734 11.728C4.84581 12.2829 5.91477 12.5751 7.01267 12.5751C10.3814 12.5751 13.122 9.83455 13.122 6.46579ZM6.07517 5.04392H5.13768C5.13768 4.00999 5.97874 3.16893 7.01267 3.16893C8.0466 3.16893 8.88766 4.00999 8.88766 5.04392C8.88766 5.5687 8.66549 6.07309 8.27792 6.42759L7.48142 7.15659V7.88766H6.54392V6.74375L7.64499 5.73594C7.84177 5.55588 7.95016 5.31016 7.95016 5.04392C7.95016 4.52696 7.52963 4.10643 7.01267 4.10643C6.4957 4.10643 6.07517 4.52696 6.07517 5.04392ZM6.54392 8.82516H7.48142V9.76265H6.54392V8.82516Z" fill="#A3A3A3"/>
                                </svg>
                            </div>
                            <?php esc_html_e( 'FAQ', 'dokan-lite' ); ?>
                        </a>
                        <a href="<?php echo esc_url( add_query_arg( array( 'page' => 'dokan#/help' ), admin_url( 'admin.php' ) ) ); ?>">
                            <div class="dokan-icon">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6652 3.42649C13.6149 3.22925 13.4626 3.07411 13.2662 3.02034C13.07 2.96648 12.8603 3.02259 12.7163 3.1665L11.4091 4.47376C10.9623 4.92058 10.2359 4.92058 9.78907 4.47376C9.34266 4.02735 9.34266 3.30014 9.78907 2.8537L11.0968 1.54595C11.2407 1.40203 11.2963 1.19197 11.2425 0.995769C11.1886 0.799569 11.0337 0.647062 10.8365 0.596952C8.41937 -0.0173161 6.24416 1.55714 5.84523 3.73139C5.71713 4.44744 5.77419 5.16067 6.00855 5.81741C5.6826 6.14339 0.648152 11.1778 0.512832 11.3132C-0.159031 11.985 -0.159031 13.0781 0.52345 13.7606C1.19955 14.4015 2.23502 14.4284 2.94958 13.75L8.44534 8.2542C9.32543 8.5683 10.307 8.56192 11.2675 8.22299C12.9982 7.61228 14.2096 5.56269 13.6652 3.42649Z" fill="#A3A3A3"/>
                                </svg>
                            </div>
                            <?php esc_html_e( 'Basic & Fundamental', 'dokan-lite' ); ?>
                        </a>
                        <a href="https://wedevs.com/account/dokan-feature-requests/" target="_blank">
                            <div class="dokan-icon">
                                <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.33962 1.5463C8.00147 0.490479 6.27038 0.109934 4.57616 0.515074C2.61184 0.969322 1.02815 2.52846 0.549312 4.48053C0.0705107 6.44481 0.622974 8.43368 2.03478 9.82097C2.53818 10.3244 2.83283 11.1141 2.83283 11.9245V12.0595C2.83283 12.4032 3.10288 12.6734 3.44668 12.6734H8.35746C8.70126 12.6734 8.97131 12.4032 8.97131 12.0595V11.9245C8.97131 11.1264 9.27824 10.3121 9.81842 9.78414C10.8497 8.7406 11.4267 7.35334 11.4267 5.88011C11.4267 4.18589 10.6655 2.60212 9.33962 1.5463ZM5.90207 4.03856C4.97598 4.03856 4.30181 4.65286 4.12527 5.36398C4.04493 5.6874 3.71951 5.89382 3.38132 5.81238C3.05283 5.73086 2.85198 5.39754 2.93354 5.06905C3.23768 3.84135 4.39082 2.81087 5.90207 2.81087C6.24136 2.81087 6.51592 3.08542 6.51592 3.42472C6.51592 3.76401 6.24136 4.03856 5.90207 4.03856Z" fill="#A3A3A3"/>
                                    <path d="M3.44678 13.9009V14.5147C3.44678 15.5302 4.27285 16.3563 5.28832 16.3563H6.51602C7.53149 16.3563 8.35756 15.5302 8.35756 14.5147V13.9009H3.44678Z" fill="#A3A3A3"/>
                                </svg>
                            </div>
                            <?php esc_html_e( 'Request a Feature', 'dokan-lite' ); ?>
                        </a>
                        <a href="<?php echo esc_url( add_query_arg( array( 'page' => 'dokan-setup' ), admin_url( 'admin.php' ) ) ); ?>">
                            <div class="dokan-icon">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5481 6.96438L14.7128 6.51304C14.6025 6.16513 14.4606 5.82776 14.2894 5.50504C14.5649 5.04635 15.144 4.08095 15.144 4.08095C15.2548 3.89648 15.2255 3.66026 15.0735 3.50829L13.7479 2.1826C13.5959 2.03016 13.3601 2.00088 13.1752 2.1121L11.7488 2.96676C11.4279 2.79691 11.0924 2.65638 10.7468 2.54698L10.2954 0.711695C10.2432 0.502945 10.056 0.356445 9.84082 0.356445H7.96582C7.75066 0.356445 7.56298 0.502945 7.51126 0.711664C7.51126 0.711664 7.1986 1.9926 7.06035 2.54651C6.69185 2.66323 6.33573 2.81476 5.99651 2.9997L4.51748 2.1121C4.33254 2.00223 4.09726 2.03063 3.94482 2.1826L2.61913 3.50829C2.46716 3.66026 2.43785 3.89648 2.54863 4.08095L3.46326 5.60851C3.31585 5.8992 3.19226 6.20176 3.09385 6.51166L1.25857 6.96438C1.04982 7.01657 0.90332 7.20379 0.90332 7.41895V9.29395C0.90332 9.5091 1.04982 9.69679 1.25854 9.74851L3.09429 10.1999C3.20554 10.5528 3.35016 10.8957 3.52551 11.2248L2.70704 12.5889C2.59626 12.7734 2.62557 13.0096 2.77754 13.1616L4.10323 14.4873C4.25476 14.6388 4.49095 14.6676 4.67588 14.5578C4.67588 14.5578 5.5937 14.0075 6.04323 13.7384C6.3687 13.9119 6.70926 14.0551 7.06038 14.1664L7.51129 16.0012C7.56298 16.21 7.75066 16.3564 7.96582 16.3564H9.84082C10.056 16.3564 10.2432 16.2099 10.2954 16.0012L10.7463 14.1664C11.1075 14.0519 11.4554 13.9041 11.7863 13.7246C12.2482 14.0016 13.1752 14.5578 13.1752 14.5578C13.3596 14.6681 13.5959 14.6397 13.7478 14.4873L15.0735 13.1616C15.2255 13.0096 15.2548 12.7734 15.144 12.5889L14.3013 11.1849C14.4674 10.8695 14.6052 10.5395 14.7128 10.1999L16.5481 9.74851C16.7569 9.69632 16.9033 9.5091 16.9033 9.29395V7.41895C16.9033 7.20379 16.7569 7.01657 16.5481 6.96438ZM8.90332 11.6377C7.09423 11.6377 5.62207 10.1655 5.62207 8.35645C5.62207 6.54735 7.09423 5.0752 8.90332 5.0752C10.7124 5.0752 12.1846 6.54735 12.1846 8.35645C12.1846 10.1655 10.7124 11.6377 8.90332 11.6377Z" fill="#A3A3A3"/>
                                </svg>
                            </div>
                            <?php esc_html_e( 'Run Setup Wizard', 'dokan-lite' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
