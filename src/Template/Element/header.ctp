<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed">
            
            <div></div>
            

            <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">
                    <!-- <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="Log">
                        <span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                            <rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg>        	</span>
                    </div> -->

                <?=$this->element('quick_side');?>

                    <!--begin: User Bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">    
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user">
                                <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                <span class="kt-header__topbar-username kt-hidden-mobile"><?=$userData['name'];?></span>
                                <?php $image = $this->Utilities->generateUrlAsset(null,$defaultAppSettings['App.Logo']); ?>
                                <img class="" alt="Pic" src="<?=$this->Url->build('/img/profile.png');?>" />
                            </div>
                        </div>

                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <!--begin: Head -->
                                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url('<?=$this->Url->build('/assets/dist/media/misc/bg-1.jpg');?>')">
                                    <div class="kt-user-card__avatar">
                                        <img class="" alt="Pic" src="<?=$this->Url->build('/img/profile.png');?>" />
                                    </div>
                                    <div class="kt-user-card__name">
                                        <?=$userData['name'];?>
                                    </div>
                                </div>
                            <!--end: Head -->
                            <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="<?=  $this->Url->build(['controller' => 'Pages', 'action'=>'edit_profile']). '/'. $userData['id'] ?>" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                My Profile
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Edit Profile
                                            </div>
                                        </div>
                                    </a>
                                    <a href="<?=  $this->Url->build(['controller' => 'Pages', 'action'=>'activitiesLog']) ?>" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon-share kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Activity
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Detail
                                            </div>
                                        </div>
                                    </a>
                                    <!-- <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-mail kt-font-warning"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                My Messages
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Inbox and tasks
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                My Activities
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Logs and notifications
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-hourglass kt-font-brand"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                My Tasks
                                            </div>
                                            <div class="kt-notification__item-time">
                                                latest tasks and projects
                                            </div>
                                        </div>
                                    </a> -->
                                    <div class="kt-notification__custom">
                                        <a href="<?=$this->Url->build(['controller'=>'Pages','action'=>'logout']);?>"  class="btn btn-label-brand btn-sm btn-bold">Sign Out</a>
                                    </div>
                                </div>
                            <!--end: Navigation -->    
                        </div>
                    </div>
                    <!--end: User Bar -->	
                </div>
            <!-- end:: Header Topbar -->
        </div>
    <!-- end:: Header -->