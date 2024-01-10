<?php
include ("db_connect.php");
?>
<header>
        <div class="logo"><a href="index.php">
            
        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="light">
                    <g clip-path="url(#clip0_334_2404)">
                        <path
                            d="M7.37326 37.9658C7.4753 37.9658 7.54404 37.9658 7.61279 37.9658C9.22073 37.9658 10.8287 37.9542 12.4359 37.976C12.7398 37.9803 12.8628 37.8358 13.009 37.6281C13.1856 37.3775 13.3853 37.1422 13.5923 36.9163C13.8151 36.6723 14.0431 36.4297 14.2942 36.2162C14.8254 35.7637 15.413 35.3947 16.0541 35.1194C16.3609 34.988 16.6721 34.8609 16.9912 34.7643C17.2684 34.6808 17.5564 34.6285 17.8437 34.5885C18.2294 34.5355 18.6187 34.481 19.0073 34.4774C19.3959 34.4738 19.7852 34.5275 20.1738 34.566C20.3547 34.5834 20.5364 34.6132 20.7136 34.6553C21.0878 34.7447 21.472 34.8115 21.8266 34.9524C22.2499 35.1202 22.6487 35.3519 23.0539 35.5639C23.5641 35.8312 24.0069 36.1936 24.4028 36.6069C24.6763 36.8923 24.9137 37.2141 25.1662 37.5199C25.1735 37.5286 25.1829 37.5366 25.1865 37.5475C25.3088 37.915 25.5823 37.9477 25.9261 37.944C27.4414 37.9266 28.9567 37.9368 30.472 37.9368C30.5465 37.9368 30.6203 37.9368 30.7368 37.9368C30.6739 37.7581 30.6261 37.6048 30.5668 37.4574C30.417 37.0848 30.2831 36.7042 30.1029 36.3469C29.8866 35.9191 29.6478 35.4993 29.3836 35.0991C29.079 34.6386 28.7519 34.1905 28.4045 33.762C28.1462 33.4431 27.8473 33.1555 27.5514 32.8694C27.2894 32.6166 27.0166 32.3733 26.7307 32.1489C26.4232 31.9077 26.1048 31.6768 25.7719 31.4734C25.4325 31.2657 25.0707 31.0936 24.7161 30.9105C24.4838 30.7907 24.2523 30.665 24.0098 30.5684C23.6972 30.4443 23.3745 30.3418 23.0539 30.238C22.7847 30.1508 22.5155 30.0629 22.2413 29.9954C21.954 29.9249 21.6602 29.8792 21.3693 29.8218C21.1377 29.7761 20.9061 29.7288 20.6738 29.6816C20.6348 29.6736 20.5957 29.6577 20.5566 29.6562C19.8822 29.6315 19.2077 29.585 18.534 29.5923C18.0709 29.5974 17.6005 29.6395 17.1475 29.7325C16.455 29.8741 15.7719 30.0629 15.0909 30.254C14.7834 30.3397 14.4802 30.4573 14.1929 30.5975C13.6567 30.8597 13.1284 31.14 12.6074 31.4327C12.3657 31.5686 12.15 31.7509 11.9214 31.9114C11.752 32.0298 11.5668 32.1307 11.4141 32.2673C11.0414 32.6006 10.6839 32.9514 10.3192 33.2935C10.202 33.4032 10.071 33.5005 9.96536 33.6196C9.77504 33.8332 9.5963 34.0569 9.41828 34.2806C9.25112 34.4897 9.07455 34.6946 8.93199 34.9197C8.56945 35.492 8.18085 36.0513 7.91527 36.6803C7.77923 37.0013 7.65983 37.3296 7.52812 37.652C7.4876 37.7516 7.43188 37.846 7.37109 37.9658H7.37326Z"
                            fill="#FFF6EC" />
                        <path
                            d="M0.0717732 30.7449C0.594968 30.5234 1.10441 30.3309 1.59215 30.0956C2.02995 29.8835 2.44822 29.6293 2.86866 29.3831C3.09154 29.2531 3.3108 29.1136 3.51415 28.956C3.85788 28.6895 4.19944 28.4178 4.52146 28.1251C4.81743 27.8557 5.09965 27.5688 5.36306 27.2674C5.77481 26.796 6.16124 26.3021 6.47819 25.7596C6.68878 25.3986 6.89936 25.0369 7.09402 24.6672C7.21631 24.4348 7.32052 24.19 7.41459 23.9445C7.59333 23.4783 7.77786 23.0127 7.92331 22.5355C8.03041 22.1825 8.08758 21.8128 8.15054 21.4475C8.20988 21.1033 8.2229 20.7488 8.30105 20.4089C8.4921 19.5722 8.38644 18.729 8.3727 17.8901C8.36618 17.4914 8.2381 17.0948 8.16429 16.6975C8.11218 16.4164 8.06659 16.1339 8.00147 15.8557C7.94357 15.6073 7.86976 15.3619 7.79016 15.12C7.71273 14.8847 7.62807 14.6508 7.52965 14.4235C7.37479 14.0647 7.21125 13.7095 7.04336 13.3565C6.93481 13.1285 6.8241 12.899 6.6895 12.6869C6.44418 12.3005 6.19453 11.9148 5.91882 11.5502C5.63008 11.1682 5.31675 10.8036 4.9969 10.4477C4.80875 10.2378 4.5931 10.0512 4.37818 9.86813C4.02938 9.5718 3.67914 9.27692 3.31442 9.0002C3.01266 8.77141 2.69498 8.56442 2.37586 8.36105C2.19567 8.2463 2.00173 8.15261 1.80997 8.05891C1.404 7.86136 0.99659 7.66526 0.586284 7.4786C0.429977 7.40742 0.261368 7.36239 0.0732205 7.29702C0.0732205 7.38418 0.0732205 7.44083 0.0732205 7.49748C0.0732205 9.16361 0.0746678 10.8297 0.0703259 12.4959C0.0703259 12.6063 0.0978244 12.668 0.197687 12.7189C0.617401 12.9317 0.932186 13.2796 1.28677 13.5773C1.61892 13.8562 1.84542 14.215 2.11607 14.5419C2.52131 15.0314 2.79412 15.5885 3.0199 16.1731C3.15088 16.5123 3.27028 16.8559 3.38317 17.2008C3.42731 17.3359 3.45264 17.4797 3.46494 17.6214C3.50185 18.0404 3.54888 18.461 3.55178 18.8815C3.55467 19.2781 3.51921 19.6768 3.47797 20.0719C3.4454 20.3842 3.39402 20.6965 3.32094 21.0016C3.26377 21.2391 3.17693 21.4729 3.07562 21.6966C2.8578 22.1774 2.66748 22.6808 2.38092 23.1187C2.08567 23.5698 1.7803 24.0281 1.34973 24.3774C1.09284 24.5859 0.857651 24.8226 0.605099 25.0369C0.495829 25.1299 0.37498 25.2185 0.244724 25.2751C0.0978244 25.3398 0.0696023 25.4342 0.0703259 25.5816C0.0753914 27.2361 0.0732205 28.8906 0.0732205 30.5451C0.0732205 30.6083 0.0732205 30.6722 0.0732205 30.7456L0.0717732 30.7449Z"
                            fill="#FFF6EC" />
                        <path
                            d="M37.9748 7.29497C37.7578 7.38213 37.5754 7.45331 37.3938 7.52812C37.0811 7.65595 36.7606 7.76852 36.4595 7.91959C36.0666 8.11714 35.6744 8.32269 35.3089 8.56672C34.814 8.89719 34.3327 9.2509 33.8689 9.62422C33.5396 9.88932 33.2357 10.1907 32.9441 10.4987C32.6633 10.795 32.4042 11.1124 32.1531 11.4349C31.9382 11.7109 31.732 11.997 31.5525 12.297C31.3398 12.6529 31.1762 13.0386 30.9606 13.393C30.6682 13.8738 30.5184 14.4113 30.323 14.9291C30.213 15.2189 30.166 15.5327 30.0864 15.8348C30.0567 15.9467 30.0025 16.0527 29.9829 16.166C29.9055 16.617 29.8215 17.0681 29.7709 17.5227C29.7137 18.0384 29.6689 18.5577 29.6573 19.0763C29.6479 19.4917 29.6718 19.9115 29.7239 20.3248C29.7846 20.8121 29.8606 21.3024 29.9858 21.7767C30.1508 22.4027 30.365 23.0165 30.5691 23.6324C30.6501 23.8778 30.7471 24.1212 30.8614 24.3528C31.0264 24.6877 31.2117 25.0123 31.394 25.3384C31.7139 25.9115 32.1025 26.4395 32.528 26.9348C32.8435 27.3024 33.2002 27.635 33.5433 27.9785C33.7408 28.1768 33.9333 28.3853 34.1547 28.5538C34.5846 28.8813 35.0289 29.1922 35.4761 29.4958C35.9146 29.7936 36.3778 30.0521 36.8655 30.2627C37.1231 30.3739 37.3858 30.4741 37.6449 30.5823C37.7418 30.623 37.8345 30.6717 37.9625 30.7327C37.9691 30.615 37.9763 30.5475 37.9763 30.4799C37.9763 28.8254 37.9763 27.1709 37.9785 25.5164C37.9785 25.374 37.9365 25.2941 37.8062 25.2048C37.1781 24.7741 36.597 24.2882 36.1542 23.6549C36.0073 23.4442 35.8379 23.2496 35.7004 23.0339C35.5528 22.8022 35.4334 22.5531 35.2974 22.3141C35.039 21.8595 34.8842 21.3699 34.7582 20.8637C34.6468 20.4163 34.565 19.9689 34.5498 19.5077C34.5426 19.2833 34.4948 19.0574 34.5086 18.8344C34.5354 18.4037 34.5658 17.9701 34.6446 17.5467C34.759 16.933 34.9471 16.3352 35.1968 15.7622C35.2872 15.5545 35.4197 15.3649 35.5369 15.1702C35.6614 14.964 35.7692 14.7425 35.9226 14.5601C36.2656 14.152 36.5688 13.706 37.0102 13.385C37.2389 13.2187 37.443 13.0189 37.6586 12.8352C37.6803 12.817 37.7035 12.796 37.7295 12.7894C37.998 12.7241 37.9799 12.5192 37.9799 12.3072C37.9756 10.7282 37.9777 9.14922 37.9777 7.56951V7.2957L37.9748 7.29497Z"
                            fill="#FFF6EC" />
                        <path
                            d="M7.3342 0.103762C7.37473 0.217065 7.39788 0.296959 7.43117 0.372494C7.5513 0.648488 7.68155 0.920851 7.79589 1.19975C7.99127 1.67693 8.19968 2.14539 8.49203 2.57464C8.72866 2.92253 8.92984 3.29512 9.17371 3.63721C9.36185 3.90086 9.58329 4.14272 9.80472 4.38022C10.0848 4.6809 10.3836 4.96271 10.6666 5.26122C11.0161 5.62872 11.4242 5.91852 11.8418 6.19887C12.0639 6.34776 12.276 6.51409 12.5039 6.65426C12.7478 6.80388 13.0018 6.93679 13.2572 7.06535C13.606 7.24111 13.9512 7.42995 14.3145 7.5694C14.7031 7.71974 15.1105 7.81997 15.5107 7.94126C15.735 8.00881 15.9593 8.07708 16.1858 8.13954C16.3392 8.18167 16.4941 8.22234 16.6504 8.24704C16.8762 8.28262 17.1063 8.29642 17.3321 8.33274C18.0803 8.45258 18.8344 8.49253 19.5884 8.44895C20.113 8.41844 20.6348 8.33201 21.1565 8.26084C21.438 8.22234 21.7188 8.17005 21.9952 8.10759C22.1957 8.06183 22.3911 7.99283 22.5864 7.92674C22.907 7.81852 23.2298 7.7132 23.5446 7.58973C23.863 7.46481 24.1828 7.33626 24.486 7.17865C24.9361 6.94478 25.3775 6.69348 25.8125 6.43129C26.0086 6.3129 26.1736 6.1444 26.361 6.01003C26.9283 5.60548 27.4349 5.13266 27.9125 4.62861C28.3315 4.18629 28.7114 3.71057 29.0696 3.21233C29.3359 2.84119 29.574 2.4577 29.7882 2.05824C30.0147 1.63553 30.2137 1.19757 30.4271 0.767601C30.5046 0.611447 30.5914 0.459649 30.6696 0.303495C30.6934 0.255559 30.7036 0.201089 30.7274 0.124828C30.6413 0.12047 30.5805 0.115385 30.5198 0.115385C28.8713 0.115385 27.2236 0.115384 25.5751 0.113931C25.4731 0.113931 25.4101 0.133543 25.3406 0.233046C25.1648 0.486524 24.9629 0.723297 24.7588 0.955712C24.5454 1.1983 24.3261 1.43725 24.0931 1.66095C23.6842 2.05461 23.2138 2.36328 22.7268 2.65525C22.3267 2.89566 21.9026 3.07288 21.4684 3.22322C21.1435 3.3358 20.794 3.3772 20.4582 3.45999C19.8525 3.60889 19.236 3.62196 18.6216 3.58274C18.1787 3.55441 17.7395 3.46435 17.301 3.38736C16.7242 3.28641 16.1699 3.10411 15.6568 2.82448C15.261 2.60877 14.876 2.36546 14.5135 2.09818C14.1582 1.83671 13.8195 1.54692 13.5062 1.23679C13.2883 1.02181 13.1226 0.753074 12.9395 0.503227C12.8599 0.394282 12.797 0.272991 12.7217 0.159689C12.7065 0.136447 12.6732 0.116112 12.6458 0.111028C12.5951 0.102312 12.5423 0.103762 12.4902 0.103762C10.8417 0.103762 9.19397 0.103762 7.54551 0.103762H7.33203H7.3342Z"
                            fill="#FFF6EC" />
                        <path
                            d="M14.1025 19.0101C14.1698 19.464 14.2212 19.9208 14.3124 20.3697C14.3551 20.5789 14.4644 20.7779 14.5649 20.9704C14.7408 21.3081 14.9058 21.6574 15.1265 21.9654C15.3139 22.2268 15.5715 22.4389 15.8031 22.6677C16.1418 23.0033 16.5506 23.2342 16.9776 23.4332C17.1353 23.5066 17.3025 23.5596 17.4689 23.6141C17.7128 23.6932 17.9581 23.7666 18.2042 23.84C18.2476 23.853 18.2953 23.8559 18.3409 23.8559C18.7787 23.8567 19.2187 23.8828 19.6536 23.8465C19.9148 23.8247 20.1696 23.7092 20.425 23.6272C20.6284 23.5618 20.836 23.5015 21.0256 23.4064C21.3354 23.2509 21.6603 23.1035 21.9273 22.8885C22.2566 22.6234 22.5554 22.3104 22.8268 21.9843C23.0417 21.7257 23.2248 21.4294 23.3688 21.1243C23.5143 20.8164 23.5939 20.4772 23.7024 20.1518C23.8659 19.6594 23.8652 19.1495 23.8283 18.644C23.803 18.2939 23.7364 17.9402 23.6366 17.604C23.5266 17.2335 23.3695 16.8747 23.2082 16.5225C23.1329 16.3583 23.0034 16.2182 22.8905 16.0736C22.7313 15.8695 22.5771 15.6589 22.3962 15.4752C22.2515 15.3277 22.0597 15.2282 21.9085 15.0859C21.5467 14.7452 21.0966 14.5673 20.6508 14.3872C20.4424 14.3029 20.2152 14.2572 19.9923 14.2187C19.7332 14.1744 19.4655 14.1765 19.2078 14.1257C18.8207 14.0487 18.4531 14.1584 18.0775 14.2049C17.5073 14.2753 16.9863 14.4852 16.4978 14.7757C16.094 15.0161 15.7401 15.3248 15.416 15.6669C14.9847 16.1208 14.7126 16.6663 14.4622 17.2364C14.2111 17.8073 14.1496 18.3963 14.1467 19.0035C14.1322 19.0057 14.1177 19.0079 14.1025 19.0101Z"
                            fill="#FFF6EC" />
                    </g>
                    <defs>
                        <clipPath id="clip0_334_2404">
                            <rect width="38" height="38" fill="white" transform="matrix(1 0 0 -1 0 38)" />
                        </clipPath>
                    </defs>
                </svg>
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="dark">
                    <g clip-path="url(#clip0_334_2404)">
                        <path
                            d="M7.37326 37.9658C7.4753 37.9658 7.54404 37.9658 7.61279 37.9658C9.22073 37.9658 10.8287 37.9542 12.4359 37.976C12.7398 37.9803 12.8628 37.8358 13.009 37.6281C13.1856 37.3775 13.3853 37.1422 13.5923 36.9163C13.8151 36.6723 14.0431 36.4297 14.2942 36.2162C14.8254 35.7637 15.413 35.3947 16.0541 35.1194C16.3609 34.988 16.6721 34.8609 16.9912 34.7643C17.2684 34.6808 17.5564 34.6285 17.8437 34.5885C18.2294 34.5355 18.6187 34.481 19.0073 34.4774C19.3959 34.4738 19.7852 34.5275 20.1738 34.566C20.3547 34.5834 20.5364 34.6132 20.7136 34.6553C21.0878 34.7447 21.472 34.8115 21.8266 34.9524C22.2499 35.1202 22.6487 35.3519 23.0539 35.5639C23.5641 35.8312 24.0069 36.1936 24.4028 36.6069C24.6763 36.8923 24.9137 37.2141 25.1662 37.5199C25.1735 37.5286 25.1829 37.5366 25.1865 37.5475C25.3088 37.915 25.5823 37.9477 25.9261 37.944C27.4414 37.9266 28.9567 37.9368 30.472 37.9368C30.5465 37.9368 30.6203 37.9368 30.7368 37.9368C30.6739 37.7581 30.6261 37.6048 30.5668 37.4574C30.417 37.0848 30.2831 36.7042 30.1029 36.3469C29.8866 35.9191 29.6478 35.4993 29.3836 35.0991C29.079 34.6386 28.7519 34.1905 28.4045 33.762C28.1462 33.4431 27.8473 33.1555 27.5514 32.8694C27.2894 32.6166 27.0166 32.3733 26.7307 32.1489C26.4232 31.9077 26.1048 31.6768 25.7719 31.4734C25.4325 31.2657 25.0707 31.0936 24.7161 30.9105C24.4838 30.7907 24.2523 30.665 24.0098 30.5684C23.6972 30.4443 23.3745 30.3418 23.0539 30.238C22.7847 30.1508 22.5155 30.0629 22.2413 29.9954C21.954 29.9249 21.6602 29.8792 21.3693 29.8218C21.1377 29.7761 20.9061 29.7288 20.6738 29.6816C20.6348 29.6736 20.5957 29.6577 20.5566 29.6562C19.8822 29.6315 19.2077 29.585 18.534 29.5923C18.0709 29.5974 17.6005 29.6395 17.1475 29.7325C16.455 29.8741 15.7719 30.0629 15.0909 30.254C14.7834 30.3397 14.4802 30.4573 14.1929 30.5975C13.6567 30.8597 13.1284 31.14 12.6074 31.4327C12.3657 31.5686 12.15 31.7509 11.9214 31.9114C11.752 32.0298 11.5668 32.1307 11.4141 32.2673C11.0414 32.6006 10.6839 32.9514 10.3192 33.2935C10.202 33.4032 10.071 33.5005 9.96536 33.6196C9.77504 33.8332 9.5963 34.0569 9.41828 34.2806C9.25112 34.4897 9.07455 34.6946 8.93199 34.9197C8.56945 35.492 8.18085 36.0513 7.91527 36.6803C7.77923 37.0013 7.65983 37.3296 7.52812 37.652C7.4876 37.7516 7.43188 37.846 7.37109 37.9658H7.37326Z"
                            fill="#353736" />
                        <path
                            d="M0.0717732 30.7449C0.594968 30.5234 1.10441 30.3309 1.59215 30.0956C2.02995 29.8835 2.44822 29.6293 2.86866 29.3831C3.09154 29.2531 3.3108 29.1136 3.51415 28.956C3.85788 28.6895 4.19944 28.4178 4.52146 28.1251C4.81743 27.8557 5.09965 27.5688 5.36306 27.2674C5.77481 26.796 6.16124 26.3021 6.47819 25.7596C6.68878 25.3986 6.89936 25.0369 7.09402 24.6672C7.21631 24.4348 7.32052 24.19 7.41459 23.9445C7.59333 23.4783 7.77786 23.0127 7.92331 22.5355C8.03041 22.1825 8.08758 21.8128 8.15054 21.4475C8.20988 21.1033 8.2229 20.7488 8.30105 20.4089C8.4921 19.5722 8.38644 18.729 8.3727 17.8901C8.36618 17.4914 8.2381 17.0948 8.16429 16.6975C8.11218 16.4164 8.06659 16.1339 8.00147 15.8557C7.94357 15.6073 7.86976 15.3619 7.79016 15.12C7.71273 14.8847 7.62807 14.6508 7.52965 14.4235C7.37479 14.0647 7.21125 13.7095 7.04336 13.3565C6.93481 13.1285 6.8241 12.899 6.6895 12.6869C6.44418 12.3005 6.19453 11.9148 5.91882 11.5502C5.63008 11.1682 5.31675 10.8036 4.9969 10.4477C4.80875 10.2378 4.5931 10.0512 4.37818 9.86813C4.02938 9.5718 3.67914 9.27692 3.31442 9.0002C3.01266 8.77141 2.69498 8.56442 2.37586 8.36105C2.19567 8.2463 2.00173 8.15261 1.80997 8.05891C1.404 7.86136 0.99659 7.66526 0.586284 7.4786C0.429977 7.40742 0.261368 7.36239 0.0732205 7.29702C0.0732205 7.38418 0.0732205 7.44083 0.0732205 7.49748C0.0732205 9.16361 0.0746678 10.8297 0.0703259 12.4959C0.0703259 12.6063 0.0978244 12.668 0.197687 12.7189C0.617401 12.9317 0.932186 13.2796 1.28677 13.5773C1.61892 13.8562 1.84542 14.215 2.11607 14.5419C2.52131 15.0314 2.79412 15.5885 3.0199 16.1731C3.15088 16.5123 3.27028 16.8559 3.38317 17.2008C3.42731 17.3359 3.45264 17.4797 3.46494 17.6214C3.50185 18.0404 3.54888 18.461 3.55178 18.8815C3.55467 19.2781 3.51921 19.6768 3.47797 20.0719C3.4454 20.3842 3.39402 20.6965 3.32094 21.0016C3.26377 21.2391 3.17693 21.4729 3.07562 21.6966C2.8578 22.1774 2.66748 22.6808 2.38092 23.1187C2.08567 23.5698 1.7803 24.0281 1.34973 24.3774C1.09284 24.5859 0.857651 24.8226 0.605099 25.0369C0.495829 25.1299 0.37498 25.2185 0.244724 25.2751C0.0978244 25.3398 0.0696023 25.4342 0.0703259 25.5816C0.0753914 27.2361 0.0732205 28.8906 0.0732205 30.5451C0.0732205 30.6083 0.0732205 30.6722 0.0732205 30.7456L0.0717732 30.7449Z"
                            fill="#353736" />
                        <path
                            d="M37.9748 7.29497C37.7578 7.38213 37.5754 7.45331 37.3938 7.52812C37.0811 7.65595 36.7606 7.76852 36.4595 7.91959C36.0666 8.11714 35.6744 8.32269 35.3089 8.56672C34.814 8.89719 34.3327 9.2509 33.8689 9.62422C33.5396 9.88932 33.2357 10.1907 32.9441 10.4987C32.6633 10.795 32.4042 11.1124 32.1531 11.4349C31.9382 11.7109 31.732 11.997 31.5525 12.297C31.3398 12.6529 31.1762 13.0386 30.9606 13.393C30.6682 13.8738 30.5184 14.4113 30.323 14.9291C30.213 15.2189 30.166 15.5327 30.0864 15.8348C30.0567 15.9467 30.0025 16.0527 29.9829 16.166C29.9055 16.617 29.8215 17.0681 29.7709 17.5227C29.7137 18.0384 29.6689 18.5577 29.6573 19.0763C29.6479 19.4917 29.6718 19.9115 29.7239 20.3248C29.7846 20.8121 29.8606 21.3024 29.9858 21.7767C30.1508 22.4027 30.365 23.0165 30.5691 23.6324C30.6501 23.8778 30.7471 24.1212 30.8614 24.3528C31.0264 24.6877 31.2117 25.0123 31.394 25.3384C31.7139 25.9115 32.1025 26.4395 32.528 26.9348C32.8435 27.3024 33.2002 27.635 33.5433 27.9785C33.7408 28.1768 33.9333 28.3853 34.1547 28.5538C34.5846 28.8813 35.0289 29.1922 35.4761 29.4958C35.9146 29.7936 36.3778 30.0521 36.8655 30.2627C37.1231 30.3739 37.3858 30.4741 37.6449 30.5823C37.7418 30.623 37.8345 30.6717 37.9625 30.7327C37.9691 30.615 37.9763 30.5475 37.9763 30.4799C37.9763 28.8254 37.9763 27.1709 37.9785 25.5164C37.9785 25.374 37.9365 25.2941 37.8062 25.2048C37.1781 24.7741 36.597 24.2882 36.1542 23.6549C36.0073 23.4442 35.8379 23.2496 35.7004 23.0339C35.5528 22.8022 35.4334 22.5531 35.2974 22.3141C35.039 21.8595 34.8842 21.3699 34.7582 20.8637C34.6468 20.4163 34.565 19.9689 34.5498 19.5077C34.5426 19.2833 34.4948 19.0574 34.5086 18.8344C34.5354 18.4037 34.5658 17.9701 34.6446 17.5467C34.759 16.933 34.9471 16.3352 35.1968 15.7622C35.2872 15.5545 35.4197 15.3649 35.5369 15.1702C35.6614 14.964 35.7692 14.7425 35.9226 14.5601C36.2656 14.152 36.5688 13.706 37.0102 13.385C37.2389 13.2187 37.443 13.0189 37.6586 12.8352C37.6803 12.817 37.7035 12.796 37.7295 12.7894C37.998 12.7241 37.9799 12.5192 37.9799 12.3072C37.9756 10.7282 37.9777 9.14922 37.9777 7.56951V7.2957L37.9748 7.29497Z"
                            fill="#353736" />
                        <path
                            d="M7.3342 0.103762C7.37473 0.217065 7.39788 0.296959 7.43117 0.372494C7.5513 0.648488 7.68155 0.920851 7.79589 1.19975C7.99127 1.67693 8.19968 2.14539 8.49203 2.57464C8.72866 2.92253 8.92984 3.29512 9.17371 3.63721C9.36185 3.90086 9.58329 4.14272 9.80472 4.38022C10.0848 4.6809 10.3836 4.96271 10.6666 5.26122C11.0161 5.62872 11.4242 5.91852 11.8418 6.19887C12.0639 6.34776 12.276 6.51409 12.5039 6.65426C12.7478 6.80388 13.0018 6.93679 13.2572 7.06535C13.606 7.24111 13.9512 7.42995 14.3145 7.5694C14.7031 7.71974 15.1105 7.81997 15.5107 7.94126C15.735 8.00881 15.9593 8.07708 16.1858 8.13954C16.3392 8.18167 16.4941 8.22234 16.6504 8.24704C16.8762 8.28262 17.1063 8.29642 17.3321 8.33274C18.0803 8.45258 18.8344 8.49253 19.5884 8.44895C20.113 8.41844 20.6348 8.33201 21.1565 8.26084C21.438 8.22234 21.7188 8.17005 21.9952 8.10759C22.1957 8.06183 22.3911 7.99283 22.5864 7.92674C22.907 7.81852 23.2298 7.7132 23.5446 7.58973C23.863 7.46481 24.1828 7.33626 24.486 7.17865C24.9361 6.94478 25.3775 6.69348 25.8125 6.43129C26.0086 6.3129 26.1736 6.1444 26.361 6.01003C26.9283 5.60548 27.4349 5.13266 27.9125 4.62861C28.3315 4.18629 28.7114 3.71057 29.0696 3.21233C29.3359 2.84119 29.574 2.4577 29.7882 2.05824C30.0147 1.63553 30.2137 1.19757 30.4271 0.767601C30.5046 0.611447 30.5914 0.459649 30.6696 0.303495C30.6934 0.255559 30.7036 0.201089 30.7274 0.124828C30.6413 0.12047 30.5805 0.115385 30.5198 0.115385C28.8713 0.115385 27.2236 0.115384 25.5751 0.113931C25.4731 0.113931 25.4101 0.133543 25.3406 0.233046C25.1648 0.486524 24.9629 0.723297 24.7588 0.955712C24.5454 1.1983 24.3261 1.43725 24.0931 1.66095C23.6842 2.05461 23.2138 2.36328 22.7268 2.65525C22.3267 2.89566 21.9026 3.07288 21.4684 3.22322C21.1435 3.3358 20.794 3.3772 20.4582 3.45999C19.8525 3.60889 19.236 3.62196 18.6216 3.58274C18.1787 3.55441 17.7395 3.46435 17.301 3.38736C16.7242 3.28641 16.1699 3.10411 15.6568 2.82448C15.261 2.60877 14.876 2.36546 14.5135 2.09818C14.1582 1.83671 13.8195 1.54692 13.5062 1.23679C13.2883 1.02181 13.1226 0.753074 12.9395 0.503227C12.8599 0.394282 12.797 0.272991 12.7217 0.159689C12.7065 0.136447 12.6732 0.116112 12.6458 0.111028C12.5951 0.102312 12.5423 0.103762 12.4902 0.103762C10.8417 0.103762 9.19397 0.103762 7.54551 0.103762H7.33203H7.3342Z"
                            fill="#353736" />
                        <path
                            d="M14.1025 19.0101C14.1698 19.464 14.2212 19.9208 14.3124 20.3697C14.3551 20.5789 14.4644 20.7779 14.5649 20.9704C14.7408 21.3081 14.9058 21.6574 15.1265 21.9654C15.3139 22.2268 15.5715 22.4389 15.8031 22.6677C16.1418 23.0033 16.5506 23.2342 16.9776 23.4332C17.1353 23.5066 17.3025 23.5596 17.4689 23.6141C17.7128 23.6932 17.9581 23.7666 18.2042 23.84C18.2476 23.853 18.2953 23.8559 18.3409 23.8559C18.7787 23.8567 19.2187 23.8828 19.6536 23.8465C19.9148 23.8247 20.1696 23.7092 20.425 23.6272C20.6284 23.5618 20.836 23.5015 21.0256 23.4064C21.3354 23.2509 21.6603 23.1035 21.9273 22.8885C22.2566 22.6234 22.5554 22.3104 22.8268 21.9843C23.0417 21.7257 23.2248 21.4294 23.3688 21.1243C23.5143 20.8164 23.5939 20.4772 23.7024 20.1518C23.8659 19.6594 23.8652 19.1495 23.8283 18.644C23.803 18.2939 23.7364 17.9402 23.6366 17.604C23.5266 17.2335 23.3695 16.8747 23.2082 16.5225C23.1329 16.3583 23.0034 16.2182 22.8905 16.0736C22.7313 15.8695 22.5771 15.6589 22.3962 15.4752C22.2515 15.3277 22.0597 15.2282 21.9085 15.0859C21.5467 14.7452 21.0966 14.5673 20.6508 14.3872C20.4424 14.3029 20.2152 14.2572 19.9923 14.2187C19.7332 14.1744 19.4655 14.1765 19.2078 14.1257C18.8207 14.0487 18.4531 14.1584 18.0775 14.2049C17.5073 14.2753 16.9863 14.4852 16.4978 14.7757C16.094 15.0161 15.7401 15.3248 15.416 15.6669C14.9847 16.1208 14.7126 16.6663 14.4622 17.2364C14.2111 17.8073 14.1496 18.3963 14.1467 19.0035C14.1322 19.0057 14.1177 19.0079 14.1025 19.0101Z"
                            fill="#353736" />
                    </g>
                    <defs>
                        <clipPath id="clip0_334_2404">
                            <rect width="38" height="38" fill="white" transform="matrix(1 0 0 -1 0 38)" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="sr-only"> Logo accueil
                </span></a>
        </div>
        <div class="containNav">
            <nav>
                <a id="item" href="index.php"> Accueil </a>
                <a href="ressources.php"> Mes Ressources </a>
                <a href="suivi.php"> Suivi scolarité </a>
                <a href="planning.php"> Planning </a>
                <a href="messagerie.php"> Messagerie </a>
            </nav>

            <div>
                <form>
                    <span class="sr-only"> <label for="themeSwitch">Theme Switch</label></span>
                    <input type="checkbox" id="themeSwitch">
                </form>
                <label for="themeSwitch">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="sun">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="moon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                    </svg>
                </label>
            </div>

            <?php

    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION["login"])) {
        // Récupérer les informations de l'utilisateur depuis la base de données
        $requete = "SELECT * FROM utilisateur WHERE user_login=:login";
        $stmt = $db->prepare($requete);
        $stmt->bindParam(':login', $_SESSION["login"], PDO::PARAM_STR);
        $stmt->execute();

        // Vérifier si la requête a retourné un résultat
        if ($stmt->rowCount() == 1) {
            $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

            ?>
            <div>
                <a href="profil.php">
                    <?php if ($utilisateur["img_profile"] !== NULL) { ?>
                        <img src="<?php echo $utilisateur["img_profile"]; ?>" alt="" class="pp">
                    <?php } else { ?>
                        <div> <iconify-icon icon="iconoir:profile-circle" width="30"></iconify-icon> </div>
                    <?php } ?>
                    <span class="sr-only"> Profil </span>
                </a>
            </div>
            <div>
                <a class="deco" href="logout.php"> Déconnexion </a>
            </div>
            <?php
        // Vérifier si l'utilisateur a le rôle égal à 1 soit admin
        if ($utilisateur["ext_role"] == 1) {
            ?>
            <div>
                <a class="back" href="./backoffice/backoffice.php"> Backoffice </a>
            </div>
            <?php
        }
    } 
} else {
    // L'utilisateur n'est pas connecté
    ?>
    <div>
        <a class="deco" href="connexion.php"> Connexion </a>
    </div>
    <?php
}
?>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="script.js"></script>

</header>
