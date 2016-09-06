<?php
use app\modules\admin\assets\AppAsset;
use yii\helpers\Url;
use app\modules\admin\component\WidgetBase;

$bundle = AppAsset::register($this)

?>

<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
            <i class="ace-icon fa fa-signal"></i>
        </button>

        <button class="btn btn-info">
            <i class="ace-icon fa fa-pencil"></i>
        </button>

        <button class="btn btn-warning">
            <i class="ace-icon fa fa-users"></i>
        </button>

        <button class="btn btn-danger">
            <i class="ace-icon fa fa-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div>
<ul class="nav nav-list" style="top: 0px;">
    <li class="<?= WidgetBase::isActive('default') ?>">
        <a href="<?= Url::toRoute(['default/index']) ?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="<?= WidgetBase::isActive('staff') ?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text">
								Nhân viên
							</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?= WidgetBase::isActive('staff', 'index') ?>">
                <a href="<?= Url::toRoute(['staff/index']) ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?= WidgetBase::isActive('staff', 'create') ?>">
                <a href="<?= Url::toRoute(['staff/create']) ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm mới
                </a>

                <b class="arrow"></b>
            </li>
        </ul>


    </li>
    <li class="<?=WidgetBase::isActiveContentCommon()?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
								Thông tin chung
							</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?= WidgetBase::isActive('nation') ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Dân tộc
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive('nation', 'index') ?>">
                        <a href="<?= Url::toRoute("nation/index") ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive('nation', 'create') ?>">
                        <a href="<?= Url::toRoute('nation/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?= WidgetBase::isActive('city') ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Thành phố - Tỉnh thành
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive('city', 'index') ?>">
                        <a href="<?= Url::toRoute("city/index") ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive('city', 'create') ?>">
                        <a href="<?= Url::toRoute('city/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="<?= WidgetBase::isActive('district') ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Quận huyện
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive('district', 'index') ?>">
                        <a href="<?= Url::toRoute("district/index") ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive('district', 'create') ?>">
                        <a href="<?= Url::toRoute('district/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?= WidgetBase::isActive('regency') ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Chức vụ
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive("regency", "index") ?>">
                        <a href="<?= Url::toRoute(['regency/index']) ?>" ?>
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive("regency", "create") ?>">
                        <a href="<?= Url::toRoute('regency/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?= WidgetBase::isActive("rank") ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Trình độ
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive("rank", 'index') ?>">
                        <a href="<?= Url::toRoute("rank/index") ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive("rank", 'create') ?>">
                        <a href="<?= Url::toRoute('rank/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?= WidgetBase::isActive("department") ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Khoa
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive("department", 'index') ?>">
                        <a href="<?= Url::toRoute("department/index") ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive("department", 'create') ?>">
                        <a href="<?= Url::toRoute('department/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>


        </ul>
    </li>
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon glyphicon glyphicon-education"></i>
            <span class="menu-text">
								Thông tin học sinh
							</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?= WidgetBase::isActive('nation') ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Danh sách lớp
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive('list-class', 'index') ?>">
                        <a href="<?= Url::toRoute("list-class/index") ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive('list-class', 'create') ?>">
                        <a href="<?= Url::toRoute('list-class/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?= WidgetBase::isActive('city') ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Thành phố - Tỉnh thành
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive('city', 'index') ?>">
                        <a href="<?= Url::toRoute("city/index") ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive('city', 'create') ?>">
                        <a href="<?= Url::toRoute('city/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>


            <li class="<?= WidgetBase::isActive("department") ?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Khoa
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?= WidgetBase::isActive("department", 'index') ?>">
                        <a href="<?= Url::toRoute("department/index") ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?= WidgetBase::isActive("department", 'create') ?>">
                        <a href="<?= Url::toRoute('department/create') ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="<?= WidgetBase::isActive('list-student') ?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon glyphicon glyphicon-send"></i>
            <span class="menu-text">Học sinh</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?= WidgetBase::isActive('list-student', 'index') ?>">
                <a href="<?= Url::toRoute(['list-student/index']) ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?= WidgetBase::isActive('list-student', 'create') ?>">
                <a href="<?= Url::toRoute(['list-student/create']) ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="<?= WidgetBase::isActive('dormitory') ?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-university"></i>
            <span class="menu-text"> Kí túc xá </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?= WidgetBase::isActive('dormitory', 'index') ?>">
                <a href="<?= Url::toRoute(['dormitory/index']) ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?= WidgetBase::isActive('dormitory', 'create') ?>">
                <a href="<?= Url::toRoute(['dormitory/create']) ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm mới
                </a>

                <b class="arrow"></b>
            </li>

        </ul>
    </li>

    <li class="<?= WidgetBase::isActive('dormitory-management') ?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-credit-card"></i>
            <span class="menu-text">Quản lí kí túc </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?= WidgetBase::isActive('dormitory-management', 'index') ?>">
                <a href="<?= Url::toRoute(['dormitory-management/index']) ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?= WidgetBase::isActive('dormitory-management', 'create') ?>">
                <a href="<?= Url::toRoute(['dormitory-management/create']) ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm mới
                </a>

                <b class="arrow"></b>
            </li>

        </ul>
    </li>
</ul>
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
       data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>