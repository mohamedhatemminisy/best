<div class="col-12 form-group">
    <br> <h3> <?php echo app('translator')->get('receipts.land_info'); ?> </h3>
    <hr>
</div>

<div class="clone_land">
    <div class="row">

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.land_type_id'); ?> </label>
            <select class="form-control land_estate_typess" name="land_estate_typess[]" id='land_type_id'>
                <option disabled selected><?php echo app('translator')->get('receipts.land_type_id'); ?></option>
                <?php $__currentLoopData = $land_type_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($land_type->id); ?>" <?php echo e(old('land_estate_typess.0') == $land_type->id ? 'selected' : ''); ?>>
                        <?php echo e($land_type->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['land_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.land_status_ids'); ?> </label>
            <select class="form-control" name="land_estate_statuss[]" id='land_status_ids'>
                <option disabled selected><?php echo app('translator')->get('receipts.land_status_ids'); ?></option>
                <?php $__currentLoopData = $land_status_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $and_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($and_status->id); ?>"
                        <?php echo e(old('land_estate_statuss.0') == $and_status->id ? 'selected' : ''); ?>>
                        <?php echo e($and_status->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['land_status_ids'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.planned_num'); ?> </label>
            <input type="text" name="land_planned_nums[]" id="planned_num" placeholder="<?php echo app('translator')->get('receipts.planned_num'); ?>"
                class="form-control" value="<?php echo e(old('land_planned_nums.0')); ?>">
            <?php $__errorArgs = ['planned_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.piece_num'); ?> </label>
            <input type="text" name="land_piece_nums[]" id="piece_num" placeholder="<?php echo app('translator')->get('receipts.piece_num'); ?>"
                class="form-control" value="<?php echo e(old('land_piece_nums.0')); ?>">
            <?php $__errorArgs = ['piece_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.city'); ?> </label>
            <select class="form-control" name="land_city_id" id='city'>
                <option disabled selected><?php echo app('translator')->get('receipts.city'); ?></option>
                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($city->id); ?>" <?php echo e(old('land_city_id.0') == $city->id ? 'selected' : ''); ?>>
                        <?php echo e($city->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['city_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.district'); ?> </label>
            <input type="text" name="land_districts[]" id="district" placeholder="<?php echo app('translator')->get('receipts.district'); ?>"
                class="form-control" value="<?php echo e(old('land_districts.0')); ?>">
            <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.owner_num'); ?> </label>
            <input type="text" name="land_owner_nums[]" id="owner_num" placeholder="<?php echo app('translator')->get('receipts.owner_num'); ?>"
                class="form-control" value="<?php echo e(old('land_owner_nums.0')); ?>">
            <?php $__errorArgs = ['owner_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.rate_num'); ?> </label>
            <input type="text" name="land_rate_nums[]" id="rate_num" placeholder="<?php echo app('translator')->get('receipts.rate_num'); ?>"
                class="form-control" value="<?php echo e(old('land_rate_nums.0')); ?>">
            <?php $__errorArgs = ['rate_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.license_type'); ?> </label>
            <select class="form-control" name="land_license_type_id[]" id='real_license_type_id'>
                <option disabled selected><?php echo app('translator')->get('receipts.license_type'); ?></option>
                <?php $__currentLoopData = $license_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($license_type->id); ?>"
                        <?php echo e(old('land_license_type_id.0') == $license_type->id ? 'selected' : ''); ?>>
                        <?php echo e($license_type->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['real_license_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.license_issue_date'); ?> </label>
            <input type="text" name="land_license_issue_dates[]" id="license_issue_date"
                placeholder="<?php echo app('translator')->get('receipts.license_issue_date'); ?>" class="form-control disable-date"
                value="<?php echo e(old('land_license_issue_dates.0')); ?>">
            <?php $__errorArgs = ['license_issue_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.license_expiration_date'); ?> </label>
            <input type="text" name="land_license_expiration_dates[]" id="license_expiration_date"
                placeholder="<?php echo app('translator')->get('receipts.license_expiration_date'); ?>" class="form-control disable-date"
                value="<?php echo e(old('land_license_expiration_dates.0')); ?>">
            <?php $__errorArgs = ['license_expiration_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.property_price'); ?> </label>
            <input type="text" name="land_property_prices[]" id="property_price"
                placeholder="<?php echo app('translator')->get('receipts.property_price'); ?>" class="form-control"
                value="<?php echo e(old('land_property_prices.0')); ?>">
            <?php $__errorArgs = ['property_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12 form-group">
            <label><?php echo app('translator')->get('receipts.land_notes'); ?> </label>
            <input type="text" name="land_property_notess[]" id="property_notes"
                placeholder="<?php echo app('translator')->get('receipts.land_notes'); ?>" class="form-control"
                value="<?php echo e(old('land_property_notess.0')); ?>">
            <?php $__errorArgs = ['property_notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <?php echo $__env->make('admin.receipt.components.land_rating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col-12 form-group">
            <a class="btn btn-light-success font-weight-bold btn-sm land_clone text-center" style="height: 35px"><i
                    class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_land'); ?> </a><br>
        </div>
    </div>
    <div class="clone_land_last">

    </div>
</div>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).on('click', '.land_clone', function() {
            var max_input_3 = 9;
            var x = 0;
            var content = `
            <iv class="new-incomee">
                <div class="row">
                    <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.land_type_id'); ?> </label>
                            <select class="form-control land_estate_typess" name="land_estate_typess[]" id='land_type_id'>
                                <option disabled selected><?php echo app('translator')->get('receipts.land_type_id'); ?></option>
                                <?php $__currentLoopData = $land_type_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($land_type->id); ?>" <?php echo e(old('land_type') == $land_type->id ? 'selected' : ''); ?>>
                                        <?php echo e($land_type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['land_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.land_status_ids'); ?> </label>
                            <select class="form-control" name="land_estate_statuss[]" id='land_status_ids'>
                                <option disabled selected><?php echo app('translator')->get('receipts.land_status_ids'); ?></option>
                                <?php $__currentLoopData = $land_status_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $and_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($and_status->id); ?>" <?php echo e(old('and_status') == $and_status->id ? 'selected' : ''); ?>>
                                        <?php echo e($and_status->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['land_status_ids'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.planned_num'); ?> </label>
                            <input type="text" name="land_planned_nums[]" id="planned_num" placeholder="<?php echo app('translator')->get('receipts.planned_num'); ?>"
                                class="form-control" value="<?php echo e(old('planned_num')); ?>">
                            <?php $__errorArgs = ['planned_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.piece_num'); ?> </label>
                            <input type="text" name="land_piece_nums[]" id="piece_num" placeholder="<?php echo app('translator')->get('receipts.piece_num'); ?>"
                                class="form-control" value="<?php echo e(old('piece_num')); ?>">
                            <?php $__errorArgs = ['piece_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.city'); ?> </label>
                            <select class="form-control" name="land_city_id" id='city'>
                                <option disabled selected><?php echo app('translator')->get('receipts.city'); ?></option>
                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($city->id); ?>" <?php echo e(old('city') == $city->id ? 'selected' : ''); ?>>
                                        <?php echo e($city->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['city_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.district'); ?> </label>
                            <input type="text" name="land_districts[]" id="district" placeholder="<?php echo app('translator')->get('receipts.district'); ?>"
                                class="form-control" value="<?php echo e(old('district')); ?>">
                            <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.owner_num'); ?> </label>
                            <input type="text" name="land_owner_nums[]" id="owner_num" placeholder="<?php echo app('translator')->get('receipts.owner_num'); ?>"
                                class="form-control" value="<?php echo e(old('owner_num')); ?>">
                            <?php $__errorArgs = ['owner_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.rate_num'); ?> </label>
                            <input type="text" name="land_rate_nums[]" id="rate_num" placeholder="<?php echo app('translator')->get('receipts.rate_num'); ?>"
                                class="form-control" value="<?php echo e(old('rate_num')); ?>">
                            <?php $__errorArgs = ['rate_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.license_type'); ?> </label>
                            <select class="form-control" name="land_license_type_id[]" id='real_license_type_id'>
                                <option disabled selected><?php echo app('translator')->get('receipts.license_type'); ?></option>
                                <?php $__currentLoopData = $license_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($license_type->id); ?>" <?php echo e(old('license_type') == $license_type->id ? 'selected' : ''); ?>>
                                        <?php echo e($license_type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['real_license_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.license_issue_date'); ?> </label>
                            <input type="text" name="land_license_issue_dates[]" id="license_issue_date"
                                placeholder="<?php echo app('translator')->get('receipts.license_issue_date'); ?>" class="form-control disable-date"
                                value="<?php echo e(old('license_issue_date')); ?>">
                            <?php $__errorArgs = ['license_issue_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.license_expiration_date'); ?> </label>
                            <input type="text" name="land_license_expiration_dates[]" id="license_expiration_date"
                                placeholder="<?php echo app('translator')->get('receipts.license_expiration_date'); ?>" class="form-control disable-date"
                                value="<?php echo e(old('license_expiration_date')); ?>">
                            <?php $__errorArgs = ['license_expiration_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.property_price'); ?> </label>
                            <input type="text" name="land_property_prices[]" id="property_price"
                                placeholder="<?php echo app('translator')->get('receipts.property_price'); ?>" class="form-control"
                                value="<?php echo e(old('property_price')); ?>">
                            <?php $__errorArgs = ['property_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-12 form-group">
                            <label><?php echo app('translator')->get('receipts.land_notes'); ?> </label>
                            <input type="text" name="land_property_notess[]" id="property_notes"
                                placeholder="<?php echo app('translator')->get('receipts.land_notes'); ?>" class="form-control"
                                value="<?php echo e(old('property_notes')); ?>">
                            <?php $__errorArgs = ['property_notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <?php echo $__env->make('admin.receipt.components.land_rating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="col-3 form-group">
                        <a class="btn btn-light-success font-weight-bold btn-sm land_clone text-center" style="height: 35px"><i
                    class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_land'); ?> </a>
                <a class="btn btn-light-danger font-weight-bold remove_land_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
            if (x < max_input_3) {
                $('.clone_land .clone_land_last').append(content);
                x++;
            }
        });

        $(document).on('click', '.remove_land_input', function() {
            $(this).parent().parent().remove();
            x--;
        })
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            var x = 0;
            const MAX_INPUT = 9;


            $(document).on('click', '.land_rate_clone', function() {
                var parent = $(this).parents(".clone_land_rate");

                var selectVal = $("#land_type_id").val();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "<?php echo e(route('real_estate_types')); ?>",
                    data: {
                        real_estate_type: selectVal,
                        _token: '<?php echo e(csrf_token()); ?>',
                    },
                    success: function(response) {
                        let land_id = response;

                        if (x < MAX_INPUT) {
                            parent.append(renderLandRate(land_id, x));
                            x++;
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
            $(document).on('click', '.remove_land_rate_input', function() {
                $(this).parent().parent().remove();
                x--;
            })
            $(document).on('change', ".land_bank_id", function() {
                let bank_val = $(this).val();
                let emp_rate_id = "#" + $(this).attr("choice_id");
                $(emp_rate_id).empty();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "<?php echo e(route('bank_emp_data')); ?>",
                    data: {
                        bank_val: bank_val,
                        _token: '<?php echo e(csrf_token()); ?>',
                    },
                    success: function(response) {

                        let len = response.length;
                        if (len > 0) {
                            for (i = 0; i < len; i++) {
                                let name = response[i].name;
                                let id = response[i].id;
                                let bank_emp_details = '<option value="' + id + '">' +
                                    name + ' </option>'
                                $(emp_rate_id).append(bank_emp_details);
                            }
                        } else {
                            let bank_emp_details = '<option value="0"> لا توجد بيانات </option>'
                            $(emp_rate_id).append(bank_emp_details);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            $(document).on('change', ".land_estate_typess", function() {
                let real_estate_type = $(this).val();
                console.log(real_estate_type);
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "<?php echo e(route('real_estate_types')); ?>",
                    data: {
                        real_estate_type: real_estate_type,
                        _token: '<?php echo e(csrf_token()); ?>',
                    },
                    success: function(response) {
                        console.log(response);
                        let land_id = response;

                        $('.land_id').each(function(i, obj) {
                            console.log(obj);
                            var value = $(obj).val(land_id);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            function renderLandRate(id, x) {
                var content = `
            <div class="new-income">
                <div class="row">
                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.bank'); ?> </label>
                        <select class="form-control land_bank_id" choice_id="emp_rate_choice_id_${x+1}" name="land_bank_ids[]" id='business_sector_id_${x+1}'>
                            <option disabled selected><?php echo app('translator')->get('receipts.bank'); ?></option>
                            <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($bank->id); ?>" <?php echo e(old('bank') == $bank->id ? 'selected' : ''); ?>>
                                    <?php echo e($bank->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['land_bank_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.first_rate'); ?> </label>
                        <input type="text" name="land_first_rates[]" id="first_rate"
                            placeholder="<?php echo app('translator')->get('receipts.first_rate'); ?>" class="form-control"
                            value="<?php echo e(old('first_rate')); ?>">
                        <?php $__errorArgs = ['first_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <input type="hidden" name="land_id[]" value="${id}" class="land_id">

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.second_rate'); ?> </label>
                        <input type="text" name="land_second_rates[]" id="second_rate"
                            placeholder="<?php echo app('translator')->get('receipts.second_rate'); ?>" class="form-control"
                            value="<?php echo e(old('second_rate')); ?>">
                        <?php $__errorArgs = ['second_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.third_rate'); ?> </label>
                        <input type="text" name="land_third_rates[]" id="third_rate"
                            placeholder="<?php echo app('translator')->get('receipts.third_rate'); ?>" class="form-control"
                            value="<?php echo e(old('third_rate')); ?>">
                        <?php $__errorArgs = ['third_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.emp_rate'); ?> </label>
                        <select class="form-control" name="land_emp_rates[]" id="emp_rate_choice_id_${x+1}">
                            <option disabled selected><?php echo app('translator')->get('receipts.emp_rate'); ?></option>
                        </select>
                        <?php $__errorArgs = ['real_emp_rate_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.approved_rate'); ?> </label>
                        <input type="text" name="land_approved_rates[]" id="approved_rate"
                            placeholder="<?php echo app('translator')->get('receipts.approved_rate'); ?>" class="form-control"
                            value="<?php echo e(old('approved_rate')); ?>">
                        <?php $__errorArgs = ['approved_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-6 form-group">
                        <label><?php echo app('translator')->get('receipts.rate_notes'); ?> </label>
                        <input type="text" name="land_rate_notess[]" id="rate_notes"
                            placeholder="<?php echo app('translator')->get('receipts.rate_notes'); ?>" class="form-control"
                            value="<?php echo e(old('rate_notes')); ?>">
                        <?php $__errorArgs = ['rate_notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-3 form-group">
                <a class="btn btn-light-success font-weight-bold btn-sm land_rate_clone text-center" style="height: 35px"><i
                        class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_land_rate'); ?> </a>
                <a class="btn btn-light-danger font-weight-bold remove_land_rate_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
                return content;
            }
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/components/land.blade.php ENDPATH**/ ?>