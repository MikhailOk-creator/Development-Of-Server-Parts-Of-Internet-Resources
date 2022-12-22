package ru.rtu_mirea.spring_pr8.service;

import ru.rtu_mirea.spring_pr8.model.User;
import ru.rtu_mirea.spring_pr8.repository.UserRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;
import java.util.Optional;

@Service
@Transactional
@RequiredArgsConstructor
public class UserService {
    private final UserRepository userRepository;

    public void register(User user) {
        if (userRepository.existsByName(user.getName())) {
            throw new RuntimeException("User already exists for this name");
        } else {
            userRepository.save(user);
        }
    }
    public User findUserByName(String name) {
        Optional<User> user = userRepository.findByName(name);
        return user.orElseThrow(() -> new UsernameNotFoundException("Could not find user"));
    }

    public List<User> findAll(){
        return userRepository.findAll();
    }
    public Optional<User> findById(int id){
        return userRepository.findById(id);
    }
    public User save(User user){
        userRepository.save(user);
        return user;
    }
    public void deleteById(int id){
        userRepository.deleteById(id);
    }
}
