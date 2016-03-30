<?php

class CommentManager {

    public function CreateComment($values) {
        $output = array('status' => 'no');
        $form = new CommentForm();
        $form->setAttributes($values, true);
        if ($form->validate() === false) {
            $output['errors'] = $form->getErrors();
            return $output;
        }
        $comment = new Comment();
        $attributes = $form->getSafeAttributes();
        $comment->setAttributes($attributes, true);
        if ($comment->save() === false) {
            $output['errors'] = $comment->getErrors();
        } else {
            $output['status'] = 'ok';
            $output['id'] = $comment->getId();
            $output['bookingId'] = $comment->bk_id;
            //评论成功，更改booking状态
            $booking = Booking::model()->getByAttributes(array('id' => $comment->bk_id, 'bk_type' => $comment->bk_type));
            if (isset($booking)) {
                $booking->setBkStatus(StatCode::BK_STATUS_DONE);
                $booking->save();
            }
        }
        return $output;
    }

    public function LoadBookingComment($bookingId) {
        return Comment::model()->getByAttributes(array('bk_type' => StatCode::TRANS_TYPE_BK, 'bk_id' => $bookingId));
    }

    public function loadCommentByDoctorId($doctorId, $with = null, $options = null) {
        return Comment::model()->getAllByAttributes(array('doctor_id' => $doctorId), $with, $options);
    }

    public function loadCountByDoctorId($doctorId) {
        $criteria = new CDbCriteria;
        $criteria->addCondition("doctor_id=:doctorId");
        $criteria->params[":doctorId"] = $doctorId;
        return Comment::model()->count($criteria);
    }

}
