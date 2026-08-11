# testing-app-practice

## 概要

COACHTECH 教材 Tutorial 10-5「テスト ハンズオン演習」で作成した成果物です。
**Laravelのテスト機能を使って、ユーザー作成機能のテストコード**

## 使用技術

- PHP 8.x
- Laravel 10.x
- PHPUnit（テスト）
- Eloquent / Factory

## 学んだこと

- Seederで作ったデータと、テストで使うデータは別物
-
-

## 動作確認

- テスト実行：sail artisan test --filter UserTest
- 期待される出力

```text
PASS  Tests\Feature\UserTest
✓ user can be created
✓ email must be unique

Tests:    2 passed (3 assertions)
Duration: 0.50s
```
