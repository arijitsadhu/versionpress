<?php

namespace VersionPress\Tests\End2End;

interface ICommentTestWorker {
    public function prepare_createCommentAwaitingModeration();
    public function createCommentAwaitingModeration();

    public function prepare_createComment();
    public function createComment();

    public function prepare_editComment();
    public function editComment();

    public function prepare_trashComment();
    public function trashComment();

    public function prepare_untrashComment();
    public function untrashComment();

    public function prepare_deleteComment();
    public function deleteComment();

    public function prepare_unapproveComment();
    public function unapproveComment();

    public function prepare_approveComment();
    public function approveComment();

    public function prepare_markAsSpam();
    public function markAsSpam();

    public function prepare_markAsNotSpam();
    public function markAsNotSpam();
}