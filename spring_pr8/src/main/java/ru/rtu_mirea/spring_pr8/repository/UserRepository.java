package ru.rtu_mirea.spring_pr8.repository;

import ru.rtu_mirea.spring_pr8.model.User;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.Optional;

public interface UserRepository extends JpaRepository<User, Integer> {
    Optional<User> findByName(String name);
    boolean existsByName(String name);

}
