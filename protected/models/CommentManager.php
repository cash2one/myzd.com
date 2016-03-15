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
        }
        return $output;
    }

    public function LoadBookingComment($bookingId) {
        return Comment::model()->getByAttributes(array('bk_type' => StatCode::TRANS_TYPE_BK, 'bk_id' => $bookingId));
    }

    public function loadCommentByDoctorId($doctorId) {
        return Comment::model()->getAllByAttributes(array('doctor_id' => $doctorId));
    }

}
