CREATE TABLE accounts (
    id integer NOT NULL primary key auto_incement,
    code varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    parent_id integer,
    branch_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1
);



CREATE TABLE branches (
    id integer NOT NULL primary key auto_incement,
    code varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    parent_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1
);



CREATE TABLE companies (
    id integer NOT NULL primary key auto_incement,
    code varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    parent_id integer,
    branch_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1
);



CREATE TABLE departments (
    id integer NOT NULL primary key auto_incement,
    code varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    parent_id integer,
    branch_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1
);



CREATE TABLE item_categories (
    id integer NOT NULL primary key auto_incement,
    code varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    parent_id integer,
    branch_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1
);



CREATE TABLE items (
    id integer NOT NULL primary key auto_incement,
    code varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    category_id integer,
    branch_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1
);



CREATE TABLE order_categories (
    id integer NOT NULL primary key auto_incement,
    code varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    parent_id integer,
    branch_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1
);



CREATE TABLE order_details (
    id integer NOT NULL primary key auto_incement,
    item_id integer,
    order_id integer,
    detail_id integer,
    quantity numeric DEFAULT 0,
    price numeric DEFAULT 0,
    disc_pct numeric DEFAULT 0,
    disc_amount numeric DEFAULT 0,
    tax1_pct numeric DEFAULT 0,
    tax2_pct numeric DEFAULT 0,
    remarks text,
    weight integer DEFAULT 50
);



CREATE TABLE orders (
    id integer NOT NULL primary key auto_incement,
    parent_id integer,
    branch_id integer,
    category_id integer,
    company_id integer,
    department_id integer,
    project_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1,
    completed integer DEFAULT 0,
    order_num varchar(50) NOT NULL,
    order_date date,
    required_date date,
    remarks1 text,
    remarks2 text,
    remarks3 text,
    remarks4 text,
    remarks5 text
);



CREATE TABLE projects (
    id integer NOT NULL primary key auto_incement,
    code varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    parent_id integer,
    branch_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1,
    completed integer DEFAULT 0
);



CREATE TABLE users (
    id integer NOT NULL primary key auto_incement,
    user_name varchar(20) NOT NULL,
    full_name varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email_address varchar(255) NOT NULL,
    parent_id integer,
    branch_id integer,
    created_by integer,
    created_on date,
    modified_by integer,
    modified_on date,
    active integer DEFAULT 1
);




ALTER TABLE  accounts
    ADD CONSTRAINT FK_accounts_branch FOREIGN KEY (branch_id) REFERENCES branches(id);


ALTER TABLE  accounts
    ADD CONSTRAINT FK_accounts_parent FOREIGN KEY (parent_id) REFERENCES accounts(id);

ALTER TABLE  branches
    ADD CONSTRAINT FK_branches_parent FOREIGN KEY (parent_id) REFERENCES branches(id);

ALTER TABLE  companies
    ADD CONSTRAINT FK_companies_branch FOREIGN KEY (branch_id) REFERENCES branches(id);

ALTER TABLE  companies
    ADD CONSTRAINT FK_companies_parent FOREIGN KEY (parent_id) REFERENCES companies(id);

ALTER TABLE  departments
    ADD CONSTRAINT FK_departments_branch FOREIGN KEY (branch_id) REFERENCES branches(id);

ALTER TABLE  departments
    ADD CONSTRAINT FK_departments_parent FOREIGN KEY (parent_id) REFERENCES departments(id);

ALTER TABLE  item_categories
    ADD CONSTRAINT FK_item_categories_branch FOREIGN KEY (branch_id) REFERENCES branches(id);

ALTER TABLE  item_categories
    ADD CONSTRAINT FK_item_categories_parent FOREIGN KEY (parent_id) REFERENCES item_categories(id);

ALTER TABLE  items
    ADD CONSTRAINT FK_items_branch FOREIGN KEY (branch_id) REFERENCES branches(id);

ALTER TABLE  items
    ADD CONSTRAINT FK_items_category FOREIGN KEY (category_id) REFERENCES item_categories(id);

ALTER TABLE  order_categories
    ADD CONSTRAINT FK_order_categories_branch FOREIGN KEY (branch_id) REFERENCES branches(id);

ALTER TABLE  order_categories
    ADD CONSTRAINT FK_order_categories_parent FOREIGN KEY (parent_id) REFERENCES order_categories(id);

ALTER TABLE  order_details
    ADD CONSTRAINT FK_order_details_details FOREIGN KEY (detail_id) REFERENCES order_details(id) ON DELETE RESTRICT;

ALTER TABLE  order_details
    ADD CONSTRAINT FK_order_details_item FOREIGN KEY (item_id) REFERENCES items(id) ON DELETE RESTRICT;

ALTER TABLE  order_details
    ADD CONSTRAINT FK_order_details_order FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE RESTRICT;

ALTER TABLE  orders
    ADD CONSTRAINT FK_orders_branch FOREIGN KEY (branch_id) REFERENCES branches(id);

ALTER TABLE  orders
    ADD CONSTRAINT FK_orders_category FOREIGN KEY (category_id) REFERENCES order_categories(id) ON DELETE RESTRICT;

ALTER TABLE  orders
    ADD CONSTRAINT FK_orders_company FOREIGN KEY (company_id) REFERENCES companies(id) ON DELETE RESTRICT;

ALTER TABLE  orders
    ADD CONSTRAINT FK_orders_department FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE RESTRICT;

ALTER TABLE  orders
    ADD CONSTRAINT FK_orders_parent FOREIGN KEY (parent_id) REFERENCES orders(id);

ALTER TABLE  orders
    ADD CONSTRAINT FK_orders_project FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE RESTRICT;

ALTER TABLE  projects
    ADD CONSTRAINT FK_projects_branch FOREIGN KEY (branch_id) REFERENCES branches(id);

ALTER TABLE  projects
    ADD CONSTRAINT FK_projects_parent FOREIGN KEY (parent_id) REFERENCES projects(id);

ALTER TABLE  users
    ADD CONSTRAINT FK_users_branch FOREIGN KEY (branch_id) REFERENCES branches(id);

ALTER TABLE  users
    ADD CONSTRAINT FK_users_parent FOREIGN KEY (parent_id) REFERENCES departments(id);


