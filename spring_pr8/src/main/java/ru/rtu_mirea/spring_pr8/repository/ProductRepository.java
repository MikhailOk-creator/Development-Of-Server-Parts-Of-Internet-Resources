package ru.rtu_mirea.spring_pr8.repository;

import ru.rtu_mirea.spring_pr8.model.Product;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProductRepository extends JpaRepository<Product, Integer> {
}
