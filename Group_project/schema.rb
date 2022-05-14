# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# This file is the source Rails uses to define your schema when running `bin/rails
# db:schema:load`. When creating a new database, `bin/rails db:schema:load` tends to
# be faster and is potentially less error prone than running all of your
# migrations from scratch. Old migrations may fail to apply correctly if those
# migrations use external dependencies or application code.
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 2021_11_04_003752) do

    # These are extensions that must be enabled in order to support this database
    enable_extension "plpgsql"
  
    create_table "bookings", force: :cascade do |t|
      t.bigint "facility_id", null: false
      t.bigint "course_id", null: false
      t.datetime "start_time", null: false
      t.datetime "end_time", null: false
      t.datetime "created_at", precision: 6, null: false
      t.datetime "updated_at", precision: 6, null: false
      t.index ["course_id"], name: "index_bookings_on_course_id"
      t.index ["facility_id"], name: "index_bookings_on_facility_id"
    end
  
    create_table "courses", force: :cascade do |t|
      t.string "title"
      t.text "description"
      t.integer "max_students"
      t.boolean "full"
      t.datetime "created_at", precision: 6, null: false
      t.datetime "updated_at", precision: 6, null: false
    end
  
    create_table "enrollments", force: :cascade do |t|
      t.bigint "user_id", null: false
      t.bigint "course_id", null: false
      t.boolean "is_teacher", default: false
      t.datetime "created_at", precision: 6, null: false
      t.datetime "updated_at", precision: 6, null: false
      t.index ["course_id"], name: "index_enrollments_on_course_id"
      t.index ["user_id"], name: "index_enrollments_on_user_id"
    end
  
    create_table "facilities", force: :cascade do |t|
      t.string "full_address"
      t.text "features"
      t.datetime "created_at", precision: 6, null: false
      t.datetime "updated_at", precision: 6, null: false
    end
  
    create_table "notifications", force: :cascade do |t|
      t.text "message"
      t.boolean "accepted"
      t.boolean "read", default: false
      t.bigint "sender_id", null: false
      t.bigint "receiver_id", null: false
      t.datetime "created_at", precision: 6, null: false
      t.datetime "updated_at", precision: 6, null: false
      t.index ["receiver_id"], name: "index_notifications_on_receiver_id"
      t.index ["sender_id"], name: "index_notifications_on_sender_id"
    end
  
    create_table "taggings", force: :cascade do |t|
      t.bigint "tag_id", null: false
      t.bigint "course_id"
      t.bigint "facility_id"
      t.datetime "created_at", precision: 6, null: false
      t.datetime "updated_at", precision: 6, null: false
      t.index ["course_id"], name: "index_taggings_on_course_id"
      t.index ["facility_id"], name: "index_taggings_on_facility_id"
      t.index ["tag_id"], name: "index_taggings_on_tag_id"
    end
  
    create_table "tags", force: :cascade do |t|
      t.string "name"
      t.string "category"
      t.datetime "created_at", precision: 6, null: false
      t.datetime "updated_at", precision: 6, null: false
    end
  
    create_table "users", force: :cascade do |t|
      t.string "first_name"
      t.string "last_name"
      t.string "email"
      t.string "password_digest"
      t.boolean "is_admin", default: false, null: false
      t.datetime "created_at", precision: 6, null: false
      t.datetime "updated_at", precision: 6, null: false
      t.index ["email"], name: "index_users_on_email", unique: true
    end
  
    add_foreign_key "bookings", "courses"
    add_foreign_key "bookings", "facilities"
    add_foreign_key "enrollments", "courses"
    add_foreign_key "enrollments", "users"
    add_foreign_key "notifications", "users", column: "receiver_id"
    add_foreign_key "notifications", "users", column: "sender_id"
    add_foreign_key "taggings", "courses"
    add_foreign_key "taggings", "facilities"
    add_foreign_key "taggings", "tags"
  end
  